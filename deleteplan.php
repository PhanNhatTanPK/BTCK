<?php
 include('config.php');
 session_start();
      if ($_GET["idm"] != $_SESSION['username'])
      {
  ?>
  <script type='text/javascript'> alert('Bạn không phải người quản lý kế hoạch này')</script>
  <script type="text/javascript">
  window.location=" plan2.php?id=<?php $_GET["id"];?>"
  </script>
  <?php
      }
      else
      {
        $id=$_GET ["id"];
        mysqli_query ($conn, "delete from detailed_plan where id_plan=$id");
        mysqli_query ($conn, "delete from plan where id_plan=$id");
?>
<script type="text/javascript">
window.location="./plan2.php"
</script>
<?php
      }
?>