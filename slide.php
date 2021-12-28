<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devicqe-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/slide.css">
    <link rel="stylesheet" href="icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
<?php
    session_start();
    include('./headerlogin.php');
    ?>
    <div class="container">
        <div class="image">
            <img src="./Image/slide1.jpg">
        </div>
        <div class="image">
            <img src="./Image/slide2.jpg" >
        </div>
        <div class="image">
            <img src="./Image/slide3.jpg">
        </div>
        <div class="image">
            <img src="./Image/slide4.jpg" >
        </div>
        <div class="image">
            <img src="./Image/slide5.jpg" >
        </div>
        <div class="button">
            <a onclick="nextimg(-1)" class="prev">&#10094;</a>
            <a onclick="nextimg(1)" class="next">&#10095;</a>
        </div>
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </div>
    
    <script>
        var imageno = 1;
        displayimg(imageno);
        function nextimg(n) {
            displayimg(imageno += n)
        }
        function currentSlide(n) {
            displayimg(imageno = n)
        }
        function displayimg(n) {
            var i;
            var image = document.getElementsByClassName("image");
            var dots = document.getElementsByClassName("dot");
            if (n > image.length) {
                imageno = 1;
            }
            if (n < 1) {
                imageno = image.length;
            }
            for (i = 0; i < image.length; i++) {
                image[i].style.display = "none";
            }
              image[imageno - 1].style.display ="block";
            
          } 

    </script>
</body>
