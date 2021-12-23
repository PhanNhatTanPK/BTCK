<style>
* {
  box-sizing: border-box;
}

body {
  font-family: "Dosis", sans-serif;
  background: #c5cae9;
}

.clear {
  clear: both;
}

/*** CARD STLES ***/
.title
{
  text-align: center;
}
.cards-container {
  width: 793px;
  max-width: 100%;
  margin: 2rem auto;
  text-align: center;
}

.card {
  float: left;
  margin: 3rem;
}

.card-one {
  position: relative;
  width: 300px;
  background: #fff;
  box-shadow: 0 10px 7px -5px rgba(0, 0, 0, 0.4);
}
.card-one header {
  position: relative;
  width: 100%;
  height: 60px;
  background-color: #c8c;
}
.card-one header::before, .card-one header::after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: inherit;
}
.card-one header::before {
  transform: skewY(-8deg);
  transform-origin: 100% 100%;
  z-index: 0;
  
}
.card-one header::after {
  transform: skewY(8deg);
  transform-origin: 0 100%;
  z-index: -1;
}
.card-one header .avatar {
  position: absolute;
  left: 50%;
  top: 30px;
  margin-left: -50px;
  z-index: 0;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  overflow: hidden;
  background: #ccc;
  border: 3px solid #fff;
}
.card-one header .avatar img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100px;
  height: auto;
}
.card-one h3 {
  position: relative;
  margin: 80px 0 30px;
  text-align: center;
}
.card-one h3::after {
  content: "";
  position: absolute;
  bottom: -15px;
  left: 50%;
  margin-left: -15px;
  width: 30px;
  height: 1px;
  background: #000;
}
.card-one .desc {
  padding: 0 1rem 2rem;
  text-align: center;
  line-height: 1.5;
  color: #777;
}
.card-one .contacts {
  width: 200px;
  max-width: 100%;
  margin: 0 auto 3rem;
}
.card-one .contacts a {
  display: block;
  width: 33.333333%;
  float: left;
  text-align: center;
  color: #c8c;
}
.card-one .contacts a:hover {
  color: #333;
}
.card-one .contacts a:hover .fa::before {
  color: #fff;
}
.card-one .contacts a:hover .fa::after {
  width: 100%;
  height: 100%;
}
.card-one .contacts a .fa {
  position: relative;
  width: 40px;
  height: 40px;
  line-height: 39px;
  overflow: hidden;
  text-align: center;
  font-size: 1.3em;
}
.card-one .contacts a .fa:before {
  position: relative;
  z-index: 0;
}
.card-one .contacts a .fa::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  transform: translate(-50%, -50%);
  background: #c8c;
  transition: width 0.3s, height 0.3s;
}
.card-one .contacts a:last-of-type .fa {
  line-height: 36px;
}
.card-one footer {
  position: relative;
  padding: 1rem;
  background-color: #6573d0;
  text-align: center;
}
.card-one footer a {
  padding: 0 1rem;
  color: #e2e2e2;
  transition: color 0.4s;
}
.card-one footer a:hover {
  color: #c8c;
}
.card-one footer::before {
  content: "";
  position: absolute;
  top: -27px;
  left: 50%;
  margin-left: -15px;
  border: 15px solid transparent;
  border-bottom-color: #6573d0;
}

</style>
<div class="title">
        <h4>Thành viên</h4>               
</div>
    <?php
        if (isset($_GET['search']))
        {        
            $sql_member="select * from account where fullName like '%{$_GET['search']}%' ";
        }
        else 
        {
            $sql_member="select * from account";
        }
        $run=$conn->query($sql_member);

        //Tổng số bản ghi
        $total_records=mysqli_num_rows($run);

        if (!$total_records) echo('Không có thành viên nào');
        else
        {
            //Trang hiện tại
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

            //Số bản ghi ở mỗi trang
            $limit = 2;

            //Tổng số trang
            $total_page = ceil($total_records / $limit);

            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page)
            {
                $current_page = $total_page;
            }
            else 
                if ($current_page < 1)
                {
                    $current_page = 1;
                }

            // Tìm bản ghi đầu của trang hiện tại
            $start = ($current_page - 1) * $limit;


            if (isset($_GET['search']))
            {
                $sql_member="select * from account where fullName like '%{$_GET['search']}%' limit $start, $limit";
            }
            else $sql_member="select * from account limit $start, $limit";

            $run=$conn->query($sql_member);
            
            while($row=$run->fetch_array())
            {
        ?>

<div class="cards-container">
    <div class="card card-one">
        <header>
            <div class="avatar">
                <img src="<?php echo $row['image'] ?>" />
            </div>
        </header>

        <h3><?php echo $row['fullName'] ?></h3>
        <div class="desc">
            <?php echo $row['birthday'] ?>
        </div>
        <div class="contacts">
            <a href=""><i class="fa fa-plus"></i></a>
            <a href=""><i class="fa fa-whatsapp"></i></a>
            <a href=""><i class="fa fa-envelope"></i></a>
            <div class="clear"></div>
        </div>

        <footer>
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
        </footer>
    </div>
  <?php 
            }
            $run->close();
            include('./home/phantrang.php');
        }
            ?>
</div>
