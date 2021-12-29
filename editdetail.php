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
session_start();
include('config.php');
include('headerlogin.php');
 if( isset ($_GET["id"])){
     $id = $_GET["id"];
 }
   $idm2 = $_GET["idm2"];
if(isset($_POST['insert'])) { 
    $point= $_POST['point'];
    $sql ="update detailed_plan set plus_point='$point' where $id = id_plan AND $idm2 = id_SV";
    $query =  mysqli_query($conn,$sql);
 ?> 
<script type="text/javascript">
window.location="detailplan.php?id=<?php echo $_GET["id"];?>&idm=<?php echo $_GET["idm"];?>"   
</script> 
<?php
}          
?>
<body>
    <div class="form-style-2">
        <div class="form-style-2-heading">NHẬP ĐIỂM</div>
        <form method="post">
        <label for="field2"><span>Điểm<span class="required">*</span></span><input type="text" class="input-field" name="point" value="" /></label>        
            <button class="btn" type="submit" name="insert" class="btn btn-default">Cập nhập</button>
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
      $res=mysqli_query ($conn, "select * from detailed_plan where  id_plan = $id AND id_SV = $idm2");
      while ($row = mysqli_fetch_array ($res))
      {
      echo "<tr>";
      echo "<td>"; echo $row["id_plan"]; echo "</td>";
      echo "<td>"; echo $row["id_SV"]; echo "</td>";
      echo "<td>"; echo $row["position"]; echo "</td>";
      echo "<td>"; echo $row["plus_point"]; echo "</td>";
      echo "</tr>";
      }
  ?>
</table>
</div>
