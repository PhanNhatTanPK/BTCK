<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Image/logovuong.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <title>Lớp kỹ thuật phần mềm K42</title>
</head>
<?php
    include("./config.php");
?>
<body>
    <?php 
    session_start();
    if(isset($_SESSION['username'])) 
    {
        include("./headerlogin.php");
    }
    else 
    {
        include("./Header.php");
    }
        include("./homepage.php"); 
        include("./footer.php")
    ?>
</body>
</html>