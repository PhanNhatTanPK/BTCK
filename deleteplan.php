<?php
 include('config.php');
 $id=$_GET ["id"];
mysqli_query ($conn, "delete from detailed_plan where id_plan=$id");
mysqli_query ($conn, "delete from plan where id_plan=$id");
?>
<script type="text/javascript">
window.location="./plan2.php"
</script>