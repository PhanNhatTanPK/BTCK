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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <title>Đăng nhập</title>
</head>

<body>
    <div class="heading"><h1>ĐĂNG NHẬP</h1></div>
    <div class="content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

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

            <div class="form-control">
                <label>Tài khoản</label>
                <div class="input-group pdt8-pdb24">
                    <i class="fa fa-user"></i>
                    <input class="input-text" name="username" type="text" placeholder="Tài khoản" required>
                </div>
            </div>

            <div class="form-control">
                <label>Mật khẩu</label>
                <div class="input-group pdt8-pdb24">
                    <i class="fa fa-lock"></i>
                    <input class="input-text" type="password" name="password" placeholder="Mật khẩu" required>
                </div>
            </div>
            
            <div class="form-control">
               <input class="input-sub" type="submit" name="login" value="Đăng nhập">
            </div>

            <p class="text-center">
                Bạn chưa có tài khoản?
                <a href="./signUp.php">Đăng ký!</a>
            </p>

            <p class="text-center">
                <a href="./forgotPassword.php">Quên mật khẩu?</a>
            </p>
        </form>
    </div>

</body>
</html>