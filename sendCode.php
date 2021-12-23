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
<div class="heading"><h1>XÁC NHẬN CODE</h1></div>
    <div class="content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-control">
                <label>Hãy nhập code mà bạn nhận được.</label>
                 
                <?php 
                    if(isset($_SESSION['info'])){
                ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
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
                    <input class="input-text" name="otp" type="number" placeholder="Nhập Code" value="" required>
                </div>
            </div>

            <div class="form-control">
               <input class="input-sub" type="submit" name="checkOtp" value="Gửi">
            </div>        
        </form>
    </div>
</body>
</html>