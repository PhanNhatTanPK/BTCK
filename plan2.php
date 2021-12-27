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
    if(isset($_POST['insert'])) { 
        $title = $_POST['Title'];
        $time = $_POST['Time'];
        $place = $_POST['Place'];
        $level =  $_POST['Level']; 
        $note = $_POST['Note'];
        $file = $_POST['File'];
        $userName= $_POST['Username'];
        $sql = "INSERT INTO Plan  VALUES (null,'$title','$time','$place',$level,'$note','$file','$userName')";
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
<div class="form-style-2-heading">PLANE KỸ THUẬT PHẦN MỀM K42</div>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="field1"><span>Title<span class="required">*</span></span><input type="text" class="input-field" name="Title" value="" /></label>
<label for="field2"><span>Place<span class="required">*</span></span><input type="text" class="input-field" name="Place" value="" /></label>
<label for="field2"><span>Note<span class="required">*</span></span><input type="text" class="input-field" name="Note" value="" /></label>
<label for="field2"><span>File<span class="required">*</span></span><input type="text" class="input-field" name="File" value="" /></label>
<label for="field2"><span>Username<span class="required">*</span></span><input type="text" class="input-field" name="Username"value=""/></label>
<label for="field2"><span>Time<span class="required">*</span></span><input type="datetime-local" class="input-field" name="Time" value="" /></label>

<label for="field4"><span>Level</span><select name="Level" class="select-field">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
</select></label>
<button class="btn" id="bt1" type="submit" name="insert" class="btn btn-default">Insert</button>
</form>
</div>
<div class="col-lg-12">
<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Time</th>
        <th>Place</th>
        <th>Level</th>
        <th>Note</th>
        <th>File</th>
        <th>Username</th>
        <th>Edit</th>
        <th>Delete</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
    // phần này là phần show data của plan
      $res=mysqli_query ($conn, "select * from plan");
      while ($row = mysqli_fetch_array ($res))
      {
      echo "<tr>";
      echo "<td>"; echo $row["id_plan"]; echo "</td>";
      echo "<td>"; echo $row["title"]; echo "</td>";
      echo "<td>"; echo $row["time"]; echo "</td>";
      echo "<td>"; echo $row["place"]; echo "</td>";
      echo "<td>"; echo $row["level"]; echo "</td>";
      echo "<td>"; echo $row["note"]; echo "</td>";
      echo "<td>"; echo $row["file"]; echo "</td>";
      echo "<td>"; echo $row["id_SV"]; echo "</td>";
      echo "<td>"; ?> <a href="updateplan.php?id=<?php echo $row["id_plan"]; ?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
      echo "<td>"; ?> <a href="deleteplan.php?id=<?php echo $row["id_plan"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
      echo "</tr>";
      }
  ?>
   
  </table>
</div>
</body>