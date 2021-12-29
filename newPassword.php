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
<div class="heading"><h1>ĐỔI MẬT KHẨU</h1></div>
    <div class="content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-control">
               <?php 
                    if(isset($_SESSION['info'])){
                ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                <?php
                    }
                ?>
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
                            
                <div class="input-group pdt8-pdb24">
                    <i class="fa fa-user"></i>
                    <input class="input-text" name="password" type="text" placeholder="Mật Khẩu" value="" required>
                </div>

                <div class="input-group pdt8-pdb24">
                    <i class="fa fa-user"></i>
                    <input class="input-text" name="repassword" type="text" placeholder="Nhập Lại Mật Khẩu" value="" required>
                </div>


            </div>

            <div class="form-control">
               <input class="input-sub" type="submit" name="changePass" value="Xác nhận">
            </div>
        </form>
    </div>    
</body>
</html>