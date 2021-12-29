<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devicqe-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/hdlogin.css">
    <link rel="stylesheet" href="icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>
    <?php

    include('config.php');
    ?>
    <div id="main">
        <div class="bar2">
            <div id="header">
                <div class="logo">
                    <img height="100%" width="200px" src="Image/logocave.png"" />
                </div>
                <ul class="anhead">
                    <!-- beggin : nav -->
                    <li class="tkb"><a href="./index.php">Trang chủ</a></li>
                    <li>
                        <a href="./listStudents.php">Danh sách sinh viên </a>
                        <ul class="subanhead">
                        </ul>
                    </li>
                    <li>
                        <a href="./listPlans.php">Kế hoạch </a>
                        <ul class="subanhead">
                        <li><a href="./plan2.php">Quản lý kế hoạch</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="login">
                    <ul class="anhead">
                        <li>
                            <a href=""><i class="fa fa-user-circle" style="margin-right: 5px;"></i>
                                <?php

                                if (!isset($_SESSION['username'])) {
                                    echo "Tài khoản";
                                } else {
                                    echo $_SESSION['username'];
                                }
                                ?>
                            </a>
                            <ul class="subanhead">
                                <li><a href="./infomation.php">THÔNG TIN CÁ NHÂN</a></li>
                                <li><a href="./logout.php">ĐĂNG XUẤT</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
       
        <!-- end nav -->
        <!-- begin : search button -->
    </div>



</body>