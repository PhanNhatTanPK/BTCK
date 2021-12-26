<?php
 include('conect.php');
$id=$_GET ["id"];
mysqli_query ($link, "delete from plan where id_plan=$id");
?>
<script type="text/javascript">
window.location=" plan2.php"
</script>