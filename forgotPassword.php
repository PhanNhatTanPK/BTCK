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
    
    <title>Document</title>
</head>
<body>
<div class="heading"><h1>QUÊN MẬT KHẨU</h1></div>
    <div class="content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-control">
                <label>Nhập địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn code để đặt lại mật khẩu của bạn.</label>
                
                <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                            
                <div class="input-group pdt8-pdb24">
                    <i class="fa fa-user"></i>
                    <input class="input-text" name="email" type="email" placeholder="Email" value="" required>
                </div>
            </div>

            <div class="form-control">
               <input class="input-sub" type="submit" name="check" value="Xác nhận">
            </div>
 
            <p class="text-center">
                Bạn đã có tài khoản?
                <a href="login.php">Đăng nhập</a>
            </p>

            <p class="text-center">
                <a href="signUp.php">Đăng ký tài khoản mới</a>
            </p>
        </form>
    </div>
</body>
</html>