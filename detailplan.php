<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annual Conference Reservation</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/plan2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/1s/bootstrap.min.js"></script>
</head>
<?php
include('config.php');
include('headerlogin.php');
   $id = $_GET["id"];
if(isset($_POST['insert'])) { 
    $idsv= $_POST['idsv'];
    $tucach = $_POST['pos'];

    $sql = "INSERT INTO  detailed_plan VALUES ($id,'$idsv',$tucach,null)";
    $query =  mysqli_query($conn,$sql);
    if( $query ){
        echo "<script type='text/javascript'> alert('Tạo kế hoạch thành công')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('Tạo kế hoạch không thành công')</script>";

    }
}  
?>
<body>
    <div class="form-style-2">
        <div class="form-style-2-heading">THÊM THÀNH VIÊN THAM GIA HOẠT ĐỘNG</div>
        <form method="post">
        <label for="field2"><span>Mã sinh viên <span class="required">*</span></span><input type="text" class="input-field" name="idsv" value="" /></label>        
        <label for="field4"><span>Tư cách</span><select name="pos" class="select-field" value="">
                    <option value="1">Cổ vũ</option>
                    <option value="2">Tham gia</option>
                    <option value="3">Có giải</option>
                    <option value="4">BTC</option>
                </select></label>
            <button class="btn" type="submit" name="insert" class="btn btn-default">Thêm</button>
        </form>
    </div>
</body>
<div class="col-lg-12">
<table class="table">
    <thead>
      <tr>
        <th>Kế hoạch</th>
        <th>Người tham gia</th>
        <th>Tư cách</th>
        <th>Điểm</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
    // phần này là phần show data 
      $res=mysqli_query ($conn, "select * from detailed_plan where id_plan = $id");
      while ($row = mysqli_fetch_array ($res))
      {
      echo "<tr>";
      echo "<td>"; echo $row["id_plan"]; echo "</td>";
      echo "<td>"; echo $row["id_SV"]; echo "</td>";
      echo "<td>"; echo $row["position"]; echo "</td>";
      echo "<td>"; echo $row["plus_point"] ; echo "</td>";
      echo "<td>"; ?> <a href="editdetail.php?id=<?php echo $row["id_plan"];?>&idm=<?php echo $row["id_SV"]; ?>"><button type="button" class="btn btn-success">Sửa điểm</button></a> <?php echo "</td>";
      echo "</tr>";
      }
  ?>
</table>
</div>
