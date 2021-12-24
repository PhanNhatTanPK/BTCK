<style>
.bgs
{
  font-family: "Dosis", sans-serif;
  background: #c5cae9;
  text-align: center;
  margin-top: 80px;
}
.pad10
{
    padding: 10px;
}
.search_h
{
    padding: 0;
    margin: auto;
    height: 50px;
    width: 700px;
    border: #74b9ff 3px solid;
    border-radius: 100px;
}
.search_h_txt
{
    height: 44px;
    width: 630px;
    border: 0;
    border-radius: 88px;
    margin-left: -347px;
    position: absolute;
}
.search_h_btn
{
    position: absolute;
    height: 44px;
    width: 100px;
    border: 0;
    border-radius: 88px;
    margin-left: 247px;
    background-color: #0984e3;
}
</style>
<div class="bgs">
    <div class="pad10">
        <form class="search_h" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">

			<input class="search_h_txt" type="text" name="search" placeholder="          Search Info" 
                value="<?php echo isset($_GET['search']) ? $_GET['search']:'' ;?>"/>

            <input class="search_h_btn" type="submit" name="bt_search" value="    "/>
        </form>
    </div>
</div>
<?php
    include('./home/member.php');
?>
