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
    <title>Document</title>
</head>

<body>
    <div class="heading"><h1>Đăng ký</h1></div>
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
                <div class="input-group pdt8-pdb24">
                    <label class="lb">Mã Sinh Viên</label>                   
                    <input class="input-text" type="number" placeholder="4250000000" value="" name="username" required>                  
                </div>
            </div>


            <div class="form-control">
                <div class="input-group pdt8-pdb24">
                    <label class="lb">Mật Khẩu</label>                   
                    <input class="input-text" type="password" placeholder="abc123" value="" name="password" required>                   
                </div>
            </div>

            <div class="form-control">               
                <div class="input-group pdt8-pdb24">
                    <label class="lb">Nhập Lại Mật Khẩu</label>                   
                    <input class="input-text" type="password" placeholder="abc123" value="" name="repassword" required>                   
                </div>
            </div>            
           
            <div class="form-control">
                <div class="input-group pdt8-pdb24">
                    <label class="lb">Email</label>                 
                    <input class="input-text" type="email" placeholder="abc@gmail.com" value="" name="email" required>                   
                </div>
            </div>

            <div class="form-control">
                <div class="input-group pdt8-pdb24">                                        
                    <label class="lb">Giới Tính</label>
                    <select name="sex" id="" class="input-text">
                            <option <?php if($sex == "Nam") {?> selected = "true" <?php };?> value="Nam">Nam</option>
                            <option <?php if($sex == "Nữ") {?> selected = "true" <?php };?> value="Nữ">Nữ</option>
                            <option <?php if($sex == "Khác") {?> selected = "true" <?php };?> value="Khác">Khác</option>
                    </select>                   
                </div>
            </div>

            <div class="form-control">
               <input class="input-sub" type="submit" name="signup" value="Đăng ký">
            </div>

            <p class="text-center">
                Bạn đã có tài khoản
                <a href="./login.php">Đăng nhập</a>
            </p>

            <p class="text-center">
                <a href="./forgotPassword.php">Quên mật khẩu?</a>
            </p>
        </form>
    </div>

</body>
</html>