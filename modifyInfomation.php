<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include("./headerlogin.php");
    ?>

    <?php  
        include("./config.php");
        // Người dùng nhấn nút save để thông tin sao khi sửa
        $errors = array();
        
        if(isset($_POST['save'])) {
            // Lưu thông tin cá nhân    
            $fullname = mysqli_real_escape_string($conn, $_POST['fullName']);
            $sex = mysqli_real_escape_string($conn, $_POST['sex']);
            $username = mysqli_real_escape_string($conn, $_POST['id_SV']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
            $address = mysqli_real_escape_string($conn, $_POST['address']);
            $countryside = mysqli_real_escape_string($conn, $_POST['countryside']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $note = mysqli_real_escape_string($conn, $_POST['note']);
            
                $sql = "UPDATE account SET id_SV = '$username', fullName = '$fullname', sex = '$sex', email = '$email',
                            birthday = '$birthday', address = '$address' , countryside = '$countryside', 
                            phone = '$phone', note = '$note'
                            WHERE id_SV = $_SESSION[username]";
            
                $query = mysqli_query($conn, $sql);
             

            // Lưu ảnh đại diện
                $maxSize = 1024000;
    
                // Lấy thông tin ảnh được tải lên
                $fileName = $_FILES['image']['name'];
                $fileSize = $_FILES['image']['size'];
                $fileTmp = $_FILES['image']['tmp_name'];
                $fileType = $_FILES['image']['type'];
            
                if(isset($fileName) && !empty($fileName)){            
                    if($fileSize > $maxSize) {
                        $errors['img'] = 'Kích thước file không được lớn hơn 10MB';
                    }
                    else {
                        $target = "Image/" . $_FILES['image']['name'];
                        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    
                        $sql = "UPDATE account SET image = '$target' WHERE id_SV = $_SESSION[username]";
                        mysqli_query($conn, $sql);                
                    }
                }
        }
    ?>
    <h1 style="text-align: center; margin-top: 900px;">Thông tin cá nhân</h1>
    <div class="modify">       
        <form action="./modifyInfomation.php" method="post" enctype="multipart/form-data">
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
        <div class="modify-header">
            <?php
                $sql_echo = "SELECT * FROM account WHERE id_SV = $_SESSION[username]";
                $query = mysqli_query($conn, $sql_echo);
                while($row = mysqli_fetch_assoc($query)) {                            
            ?>
           
           <div class="avatar-wrapper">             
                <img class="profile-pic" src="<?php echo $row['image']?>" />              
            </div>
            
             <div class="modify-text">
                <h4 class="pd10"><?php echo $row['fullName'];?></h4>
                <p class="sub pd10">Lớp Kỹ thuật phần mềm-K42</p>  
                <div class="">
                    <label class ="modify-btn" for="upload"> <i class="fa fa-camera" style="padding: 5px 0 5px 20px "></i> Đổi ảnh đại diện</label>
                    <input id="upload" type="file" name="image">                                                                                                             
                </div>               
            </div>
        </div>

        <div class="modify-content">
            <div class="nav-tab">
                <h3>Chỉnh sửa</h3>                                
            </div>
            <hr>
            
                <div class="form-group">
                    
                    <div class="form-control">
                        <label>Họ và tên</label>
                        <div class="input-group pdt8-pdb24"> 
                            <input class="input-text mw" name="fullName" value="<?php echo $row['fullName']?>" type="text">
                        </div>
                    </div>

                    <div class="form-control">
                        <label>Mã sinh viên</label>
                        <div class="input-group pdt8-pdb24">
                            <input class="input-text mw" name="id_SV" value="<?php echo $row['id_SV']?>" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-control">
                        <label>Email</label>
                        <div class="input-group pdt8-pdb24"> 
                            <input class="input-text mw" name="email" value="<?php echo $row['email']?>" type="email">
                        </div>
                    </div>

                    <div class="form-control">
                        <label>Ngày sinh</label>
                        <div class="input-group pdt8-pdb24">
                            <input class="input-text mw" name="birthday" value="<?php echo $row['birthday']?>" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-control">
                        <label>Giới tính</label>
                        <div class="input-group pdt8-pdb24"> 
                            <input class="input-text mw" name="sex" value="<?php echo $row['sex']?>" type="text">
                        </div>
                    </div>

                    <div class="form-control">
                        <label>Địa chỉ</label>
                        <div class="input-group pdt8-pdb24">
                            <input class="input-text mw" name="address" value="<?php echo $row['address']?>" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-control">
                        <label>Quê quán</label>
                        <div class="input-group pdt8-pdb24"> 
                            <input class="input-text mw" name="countryside" value="<?php echo $row['countryside']?>" type="text">
                        </div>
                    </div>

                    <div class="form-control">
                        <label>Số điện thoại</label>
                        <div class="input-group pdt8-pdb24">
                            <input class="input-text mw" name="phone" value="<?php echo $row['phone']?>" type="text">
                        </div>
                    </div>
                </div>

                 <div class="form-control">
                        <label>Ghi chú</label>
                        <div class="input-group pdt8-pdb24">
                            <textarea class="input-text" name="note" cols="10" rows="5"></textarea>
                        </div>
                </div>

               
                <div class="modify-submit">
                    <button class="modify-btn" type="submit" name="save">Lưu</button>
                </div>               
            </form>
        </div>
        <?php 
            }
        ?>
    </div>
    <?php 
        include("./footer.php")
    ?>
</body>
</html>