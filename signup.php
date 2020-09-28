<?php require_once "configurator.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $stringfetch['sup_n'];?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup.php" method="POST" autocomplete="">
                    <h2 class="text-center">
                    <?php echo $stringfetch['sup_n'];?></h2>
<p class="text-center">
<?php echo $stringfetch['s_greetings'];?></p>
<?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
<?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
<li><?php echo $showerror; ?></li>
<?php
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
                        <input class="form-control" type="password" name="cpassword" placeholder="<?php echo $stringfetch['cpass'];?>" required>
                    </div>
<div class="form-group">
<div class="form-group">
                        <input class="form-control" type="text" name="mobile" placeholder="<?php echo $stringfetch['phone_num'];?>" required value="<?php echo $mobile ?>">
                    </div>
                        <button class="form-control button" type="submit" name="signup" value="Signup"><?php echo $stringfetch['signup'];?></button>
                    </div>
<div class="link login-link text-center">
<?php echo $stringfetch['exist_mem'];?> <a href="login.php"><?php echo $stringfetch['login_here'];?></a></div>
</form>
</div>
</div>
</div>
</body>
</html>