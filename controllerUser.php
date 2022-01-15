<?php 
session_start();
include_once("./config.php");
$email = $username = $password = $repassword = $fullname = $address = $birhday = "";
$sex = $contryside = $phone = $facebook = $instagram = $point1 = $point2 = "";
$errors = array();


//Người dùng nhấn nút đăng ký
if(isset($_POST['signup'])){
    // Lấy thông tin người dùng nhập
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $repassword = mysqli_real_escape_string($conn, $_POST['repassword']);  
    $sex = mysqli_real_escape_string($conn, $_POST['sex']);

    // Kiểm tra xem mật khẩu nhập lại có giống mật khẩu đã nhập không
    if($password !== $repassword){
        $errors['password'] = "Mật khẩu nhập lại không đúng!";
    }

    $username_check = "SELECT * FROM account WHERE id_SV = '$username'";
    $res = mysqli_query($conn, $username_check);

    // Kiểm tra tài khoản đã tồn tại hay chưa
    if(mysqli_num_rows($res) > 0){
        $errors['username'] = "Tài khoản nãy đã tồn tại!";
    }
    elseif(count($errors) == 0){
        $info = "Bạn đã đăng ký thành công!";
        $code = rand(999999, 111111);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);        
        $sex = mysqli_real_escape_string($conn, $_POST['sex']);      

        $insert_data = "InSERT INTO account (code, email, id_SV, userPass, sex)
                        values('$code', '$email', '$username', '$password', '$sex')";

        mysqli_query($conn, $insert_data);    
        
        $_SESSION['info'] = $info;
        
    }
}

    //Người dùng nhấn nút đăng nhập
    if(isset($_POST['login'])){
        // Lấy thông tin người dùng nhập
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $check_user = "SELECT * FROM account WHERE id_SV = '$username' AND userPass = '$password'";
        $res = mysqli_query($conn, $check_user);

        // Kiểm tra tài khoản và mật khẩu có đúng không
        if(mysqli_num_rows($res) > 0) {          
            header('location: ./slide.php');               
        }            
        else {
            $errors['username'] = "Tài khoản hoặc mật khẩu không dúng!";
        }
        $_SESSION['username'] = $username;
    }
    

    //Người dùng nhấn nút quên mật khẩu
    if(isset($_POST['check'])){
        // Lấy thông tin người dùng nhập
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $check_email = "SELECT * FROM account WHERE email = '$email'";
        $run_sql = mysqli_query($conn, $check_email);

        // Kiểm tra email này có tồn tại hay không
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE account SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);

            // Kiểm tra nếu việc cập nhật code thành công sẽ gửi code cho người dùng
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: ktpmk42.qnu@gmail.com";

                // Kiểm tra xem việc gửi code có thành công hay không
                if( mail($email, $subject, $message, $sender)){
                    $info = "Chúng tôi đã gửi mã OTP tới email của bạn - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: sendCode.php');
                    
                    exit();
                }else{
                    $errors['otp-error'] = "Gửi Code thất bại!";
                }
            }else{
                $errors['db-error'] = "Có một số vấn đề đã xảy ra!";
            }
        }else{
            $errors['email'] = "Email này không tồn tại!";
        }
    }

    //Người dùng nhấn nút checkOtp
    if(isset($_POST['checkOtp'])){
        $_SESSION['info'] = "";
        $otp = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM account WHERE code = $otp";
        $code_res = mysqli_query($conn, $check_code);

        // Kiểm tra code người dùng nhập có đúng hay không
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Bạn hãy tạo mật khẩu mới!";
            $_SESSION['info'] = $info;
            header('location: newPassword.php');
            exit();
        }else{
            $errors['otp-error'] = "Bạn đã nhập sai Code!";
        }
    }

    //Người dùng nhấn nút changPass
    if(isset($_POST['changePass'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $repassword = mysqli_real_escape_string($conn, $_POST['repassword']);

        // Kiểm tra mật khẩu nhập lại
        if($password !== $repassword){
            $errors['password'] = "Mật khẩu nhập lại không đúng!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; 
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $update_pass = "UPDATE account SET code = $code, userPass = '$password' WHERE email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);

            // Kiểm tra việc cập nhật password thành công hay không
            if($run_query){
                $info = "Mật khẩu của bạn đã được đổi. Bây giờ bạn có thể đăng nhập bằng mật khẩu mới";
                $_SESSION['info'] = $info;
                header('Location: passwordChanged.php');
            }else{
                $errors['db-error'] = "Đổi mật khẩu không thành công!";
            }
        }
    }
    
   //Người dùng nhấn nút đăng nhập ở trang passwordChanged
    if(isset($_POST['loginNow'])){
        header('Location: login.php');
    }

    
?>
