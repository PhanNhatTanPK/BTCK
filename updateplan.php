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
     $id=$_GET["id"];
     $title ="";
     $time= "";
     $place= "";
     $level= "";
     $note= "";
     $file= "";
     $username= "";
    $res=mysqli_query ($conn, "select * from plan where id_plan=$id");
    while ($row = mysqli_fetch_array($res)){
    $title = $row["title"];
    $time = $row["time"];
    $place = $row["place"];
    $level = $row["level"];
    $note = $row["note"];
    $file = $row["file"];
    $username= $row["id_SV"];     
    }    
   
                                                     
?>
   <body>
<div class="form-style-2">
<div class="form-style-2-heading">Sửa kế hoạch</div>
<form method="post">
<label for="field2"><span>Người tạo<span class="required">*</span></span><input type="text" class="input-field" name="Username"value="<?php echo  $username;  ?>"/></label>
<label for="field1"><span>Tên hoạt động<span class="required">*</span></span><input type="text" class="input-field" name="Title" value="<?php echo $title;  ?>" /></label>
<label for="field4"><span>Cấp</span><select name="Level" class="select-field" value="<?php echo   $level;  ?>">
<option value="1">Lớp</option>
<option value="2">Khoa</option>
<option value="3">Trường</option>
</select></label>
<label for="field2"><span>Thời gian<span class="required">*</span></span><input type="datetime-local" class="input-field" name="Time" value="<?php echo $time; ?>" /></label>
<label for="field2"><span>Địa điểm<span class="required">*</span></span><input type="text" class="input-field" name="Place" value="<?php echo  $place;  ?>" /></label>
<label for="field2"><span>Ghi chú<span class="required">*</span></span><input type="text" class="input-field" name="Note" value="<?php echo  $note;  ?>" /></label>
<label for="field2"><span>File đính kèm<span class="required">*</span></span><input type="text" class="input-field" name="File" value="<?php echo $file;  ?>" /></label>


<button  class="btn"type="submit" name="update" class="btn btn-default">Update</button>
</form>
</div>
</body>
<?php 
 if (isset ($_POST['update'])){
   $title1 = $_POST['Title'];
   $time1 = $_POST['Time'];
   $place1 = $_POST['Place'];
   $level1 =  $_POST['Level']; 
   $note1 = $_POST['Note'];
   $file1 = $_POST['File'];
   $userName1= $_POST['Username'];
   mysqli_query ($conn, "update plan set title='$title1',time='$time1', place='$place1', level='$level1', 
                  note='$note1',  file='$file1' ,  id_SV='$userName1' 
                  where id_plan =  $id");
?> 
<script type="text/javascript">
window.location=" plan2.php"
</script>
<?php
}          
?>