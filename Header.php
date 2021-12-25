<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devicqe-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
</head>
<body>
<?php
          
           include('config.php');
    ?>
    <div id="main">
      <div class="bar">
        <div id="header">        
            <div class="logo">
                <img height="100%" width="200px"
                  src="Image/logocave.png"/>
                </div>
            <ul class="nav">
                <!-- beggin : nav -->
           <li class="tkb"><a href="">Thời Khóa biểu</a></li>
           <li>
            <a href="">Thành viên </a>
            <ul class="subnav">
                <li><a href="">An Nguyễn</a></li>
                <li><a href="">Tân Phan</a></li>
                <li><a href="">Hùng Lê</a></li>
            </ul>
        </li>
           <li>
            <a href="./listStudents.php">Danh sách sinh viên </a>
        </li>
           <li>
            <a href="./listPlans.php">Kế hoạch </a>
            <ul class="subnav">
                <li><a href="">Creat</a></li>
                <li><a href="">Update</a></li>
            </ul>
        </li>
            </ul>
            <div class="login">
            <ul class="nav">
            <li>
                <a href=""><i class="fa fa-user-circle" style="margin-right: 10px;"></i>TÀI KHOẢN
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
