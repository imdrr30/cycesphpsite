<?php 
require_once "configurator.php";
if (isset($_SESSION['email'])){
    header('location: dashboard.php');
}
if(isset($_COOKIE['E'])){
    $ec = mysqli_real_escape_string($con, $_COOKIE['E']);
    $ssq = mysqli_query($con,"SELECT email,role FROM usertable WHERE session='$ec'");
    $ssq2 = mysqli_fetch_assoc($ssq);
    $_SESSION['email'] = $ssq2['email'];
    $_SESSION['role'] = $ssq2['role'];
    header('location: dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $stringfetch['login'];?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <style> /* Split the screen in half */
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
  background-color: #2b377a;
}

/* Control the right side */
.right {
  right: 0;
  background-color: white;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}


.cleft{
    top: 30%;
  
    position: relative;
}

/* Style the image inside the centered container, if needed */
.centered img {
  width: 150px;
  border-radius: 50%;
} 
h3{
   color:white;
}
h2{
   color:#39dbff;

}
.beloww{
    bottom:0;
    color:white;
}
</style>
</head>
<body>
    <div class="split left">
    <div class="centered cleft">
    <h3><?php echo $stringfetch['brand'];?></h3>
    <h2><?php echo $stringfetch['brand_full'];?></h2>
    <div class="link login-link text-center beloww" >
    <?php echo $stringfetch['not_a_member'];?> <a href="signup.php"><?php echo $stringfetch['signup'];?></a></div>
    </div>
    
    </div>
    <div class="split right">
        <div class="centered ">
        <div class="row">
            <div class="col-md form login-form">
                <form action="login.php" method="POST" autocomplete="">
                    <h1 class="text-center">
                    <?php echo $stringfetch['login'];?></h1>
                    <p class="text-center">
                    <?php echo $stringfetch['greetings'];?></p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="<?php echo $stringfetch['email_address'];?>" required value="<?php echo $email ?>">
                    </div>
<div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="<?php echo $stringfetch['pass'];?>" required>
                    </div>
<div class="form-group">
                        <button class="form-control btn btn-primary button" type="submit" name="login" value="Login"><?php echo $stringfetch['login'];?></button>
                    </div>

</form>
</div>
</div>
</div>
</div>
</body>
</html>
