<style>
    .pagination
    {
        text-align: center;
        margin-top: 460px;
    }
    .pagination a
    {
        text-decoration: none;
    }
    .pagination a, .pagination span
    {
        color: #dfe6e9;
        background-color: #2d3436;
        padding: 10px 14.5px;
        border-radius: 15px;
        margin: 5px;
    }
    .pagination span
    {
        background-color: #636e72;
    }

</style>

<div class="pagination">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            $search= isset($_GET['search']) ? $_GET['search'] : '';
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1)
            {
                echo '<a class="NextPrev" href="index.php?search='.$search.'&page='.($current_page-1).'">Prev</a>';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++)
            {
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span>';
                }
                else
                {
                    echo '<a href="index.php?search='.$search.'&page='.$i.'">'.$i.'</a>';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút next
            if ($current_page < $total_page && $total_page > 1)
            {
                echo '<a class="NextPrev" href="index.php?search='.$search.'&page='.($current_page+1).'">Next</a>';
            }
           ?>
</div>

