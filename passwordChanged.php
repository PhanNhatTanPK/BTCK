<!DOCTYPE html>
<html lang="en">
<?php
    include("./controllerUser.php");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="icon" href="./Image/logovuong.png" type="image/x-icon" />
    <title>Quên mật khẩu</title>
</head>
<body>
<div class="heading"></div>
    <div class="content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

            <?php 
                if(isset($_SESSION['info'])){
            ?>
                    <div class="alert alert-success text-center">
                        <?php echo $_SESSION['info']; ?>
                    </div>
            <?php
                }
            ?>

            <div class="form-control">
               <input class="input-sub" type="submit" name="loginNow" value="Đăng nhập">
            </div>
        </form>
    </div>    
</body>
</html>