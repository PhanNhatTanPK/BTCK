<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Document</title>
</head>
<?php
    include("./config.php");
?>

<body>
    <?php include("./headerlogin.php") ?>

    <?php              
        $n = 1;
        $sql = "SELECT id_SV, fullName, birthday, sex, countryside, phone FROM account ORDER BY id_SV asc";

        // Khi người dùng không nhấn nút tìm kiếm hoặc để thông tin trống và nhấn nút tìm kiếm sẽ load đầy đủ danh sách
        if(!isset($_POST['search-btn']) || $_POST['info'] == "") {
            $query = mysqli_query($conn, $sql);
        }
        else {
            $input = $_POST['info'];
            $sql1 = "SELECT id_SV, fullName, birthday, sex, countryside, phone FROM account 
                        WHERE id_SV LIKE '%{$input}%' OR fullName LIKE '%{$input}%' 
                        OR sex LIKE '%{$input}%' OR countryside LIKE '%{$input}%' ORDER BY id_SV asc";
            $query = mysqli_query($conn, $sql1);          
        }
    ?>
    <div class="list-header">
            <h1>DANH SÁCH SINH VIÊN</h1>
            <h3>Lớp kỹ thuật phầm mềm K42</h3>
    </div>
    <div class="list detail">
        
        <form action="./listStudents.php" method="post">
            <div class="list-btn">
                <input type="text" placeholder="Nhập thông tin cần tìm kiếm" name="info">
                <button type="submit" name="search-btn" >Tìm kiếm</button>              
            </div>

            <table>
                <tr>
                    <th>STT</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Quê quán</th>
                    <th>Số điện thoại</th>
                </tr>
                <tr>
                    <?php
                        $i = 0;
                        while($row = mysqli_fetch_assoc($query)) {
                            if($i == 1) {
                                echo "</tr>";
                                $i = 0;;
                            }
                    ?>
                        <td><?php echo $n; ?> </td>
                        <td><?php echo $row['id_SV'];?></td>
                        <td><?php echo $row['fullName'];?></td>
                        <td><?php echo $row['birthday'];?></td>
                        <td><?php echo $row['sex'];?></td>
                        <td><?php echo $row['countryside'];?></td>
                        <td><?php echo $row['phone'];?></td>
                    <?php 
                        $n++;
                        $i++;
                        }
                    ?>               
            </table>
        </form>
    </div>

    <?php 
        include("./footer.php")
    ?>
</body>
</html>