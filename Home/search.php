</br></br></br></br></br></br></br>
<div class="homepage">
    <h3>Chào mừng đến với KTPM K42<h3>
    <div class="search">    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">

			<input type="text" name="search" placeholder="Search Info" 
                value="<?php echo isset($_GET['search']) ? $_GET['search']:'' ;?>"/>

            <input type="submit" name="bt_search" value="    "/>
        </form>
    </div>
</div>
<?php
    include('./home/member.php');
?>
