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
    <?php include("./header.php") ?>

    <?php              
        $n = 1;
        $sql = "SELECT * FROM plan";

        // Khi người dùng không nhấn nút tìm kiếm hoặc để thông tin trống và nhấn nút tìm kiếm sẽ load đầy đủ danh sách
        if(!isset($_POST['search-btn']) || $_POST['info'] == "") {
            $query = mysqli_query($conn, $sql);
        }
        else {
            $input = $_POST['info'];
            $sql1 = "SELECT * FROM plan 
                WHERE title like '%{$input}%' OR time like '%{$input}%' OR place like '%{$input}%'";
            $query = mysqli_query($conn, $sql1);          
        }
    ?>

    <div class="list detail">
        <div class="list-header">
            <h2>DANH SÁCH KẾ HOẠCH HOẠT ĐỘNG</h2>
            <h4>Lớp kỹ thuật phầm mềm K42</h4>
        </div>
        <form action="./listPlans.php" method="post">
            <div class="list-btn">
                <input type="text" placeholder="Nhập thông tin cần tìm kiếm" name="info">
                <button type="submit" name="search-btn" >Tìm kiếm</button>              
            </div>

            <table>
                <tr>
                    <th>STT</th>
                    <th>Tên hoạt động</th>
                    <th>Thời gian</th>
                    <th>Địa điểm</th>
                    <th>Cấp hoạt động</th>
                    <th>Ghi chú</th>
                    <th>File hướng dẫn</th>
                    <th>Mã sinh viên</th>
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
                        <td><?php echo $row['title'];?></td>
                        <td><?php echo $row['time'];?></td>
                        <td><?php echo $row['place'];?></td>
                        <td><?php echo $row['level'];?></td>
                        <td><?php echo $row['note'];?></td>
                        <td><?php echo $row['file'];?></td>
                        <td><?php echo $row['id_SV'];?></td>
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