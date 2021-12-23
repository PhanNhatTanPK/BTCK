<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
</head>
<body>
<div id="main">
      <div class="bar">
        <div id="header">        
            <div class="logo">
                <img height="100%" width="150px"
                  src="https://cdn.freelogovectors.net/wp-content/uploads/2019/04/avangers-endgame-logo.png"/>
                </div>
            <ul class="nav">
                <!-- beggin : nav -->
        
           <li class="tkb"><a href="">Thời Khóa biểu</a></li>
           <li>
            <a href="">Thành viên </a>
            <ul class="subnav">
                <li><a href="">rocksssssss</a></li>
                <li><a href="">chill</a></li>
                <li><a href="">ballad</a></li>
            </ul>
        </li>
           <li>
            <a href="./listStudents.php">Danh sách lớp</a>
        </li>
           <li>
            <a href="">Kế hoạch </a>
            <ul class="subnav">
                <li><a href="./modifyInfomation.php">rocksssssss</a></li>
                <li><a href="">chill</a></li>
                <li><a href="">ballad</a></li>
            </ul>
        </li>
            </ul>
            <div class="login">
            <ul class="nav">
            <li>
                
                <a href=""> <i class="fa fa-user"></i>
                <?php 
                if (!isset($_SESSION['username']))
                    echo "Tài Khoản";
                else
                    echo $_SESSION['username']; ?>
            
                </a>
                <ul class="subnav">
                   <li><a href="./login.php">Đăng nhập</a></li>
                   <li><a href="./signUp.php">Đăng ký</a></li>
                </ul>
            </li>
             </ul>
            </div>
        </div>
    </div>
            <!-- end nav -->
            <!-- begin : search button -->
        </div>
        <div class="slider">
            
        </div>
    </body>