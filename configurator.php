<?php 
session_start();
require "config.php";
$email = "";
$mobile = "";
$errors = array();
if(!isset($_SESSION['lang'])){
    $_SESSION['lang']="en";
}
if(isset($_GET['lang'])){
    $mobile = mysqli_real_escape_string($con, $_GET['lang']);
    $_SESSION['lang']=$_GET['lang'];
}
$lq='SELECT * FROM strings WHERE `lang`= "'.$_SESSION['lang'].'"';
$lquery = mysqli_query($con,$lq);
$stringfetch = mysqli_fetch_assoc($lquery);


//if user click signup button
if(isset($_POST['signup'])){
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = $stringfetch['email_exists'];
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO usertable (email, password, code, status, mobile, role,language,content)
                        values('$email', '$encpass', '$code', '$status' ,'$mobile','USER','en,'en')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $mail->Subject = "Email Verification Code";
            $mail->Body = "Your verification code is $code";
            $mail->addAddress($email);
            if($mail->send()){
                $info = $stringfetch['code_message'].$email;
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: verify.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}
    //if user click verification code submit button
if(isset($_POST['check'])){
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 107856;
            $status = 'verified';
            $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $role;
                header('location: dashboard.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = $stringfetch['code_inc'];
        }
}

//if user click login button
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $check_email);
    if(mysqli_num_rows($res) > 0){
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        $role = $fetch['role'];
        if(password_verify($password, $fetch_pass)){
            $_SESSION['email'] = $email;
            $status = $fetch['status'];
            if($status == 'verified'){
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $role;
                $_SESSION['lang'] = $fetch['language'];
                $_SESSION['content'] = $fetch['content'];
                header('location: dashboard.php');
            }else{
                $info = $stringfetch['code_message_nt_verified'].$email;
                $_SESSION['info'] = $info;
                header('location: verify.php');
            }
        }else{
            $errors['email'] = $stringfetch['incorrect'];
        }
    }else{
        $errors['email'] = $stringfetch['member_message'];
    }
}
?>
