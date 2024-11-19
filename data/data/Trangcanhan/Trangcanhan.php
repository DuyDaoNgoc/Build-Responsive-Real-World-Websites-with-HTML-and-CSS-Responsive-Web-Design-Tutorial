<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog game</title>
    <link rel="icon" href="/data/img/images.png" >
    <link rel="stylesheet" type="text/css" href="/data/blog/test.css">
    <link rel="stylesheet" href="/data/login/from-php.css">
    <link rel="stylesheet" type="text/css" href="/data/trangcanhan/trangcanhan.css">
</head>
<body>



<nav>
    <a class="a-logo">
        <img src="/data/img/images.jpg" class="logo">
    </a>
    <ul class="menu-hover">
        <div class="search-bar-container">
            <form action="" method="POST" class="search-form">
                <input type="text" name="tu_khoa" id="tu_khoa" placeholder="Tìm kiếm..." required>
                <button type="submit">Tìm kiếm</button>
            </form>
        </div>

        <li><a href="/data/blog/Trangchu.php?page_layout=Trangchu">Trang chủ</a></li>
        <li><a href="#">Tin tức về game</a></li>
        <li><a href="#">Video về game</a></li>
        <li>Game thủ
            <ul class="sum-hover">
                <li><a href="#">2020</a></li>
                <hr>
                <li><a href="#">2021</a></li>
                <hr>
                <li><a href="#">2022</a></li>
                <hr>
                <li><a href="#">2023</a></li>
                <hr>
                <li><a href="#">2024</a></li>
            </ul>
        </li>
        <li><a href="/shop.html">Shop</a></li>
        <li><a href="/data/blog/bloggame.html?page_layout=bloggame" target="_blank">Chia sẻ</a></li>
        <li>Thông tin tài khoản
            <ul class="sum-hover" style="border: 1px solid black;">
                <?php      
                    if (isset($_SESSION['tk'])) {
                        echo "<li><a href='/data/trangcanhan/Trangcanhan.php' style='color:aqua'>trang cá nhân</a></li>";
                    } else {
                        echo "<li><a href='/data/trangcanhan/Trangcanhan.php' style='color:aqua'>trang cá nhân</a></li>";
                    }
                ?>
                <hr>
                <li><a href="#">mục lưu trữ</a></li>
                <hr>
                <li><a href="#">mục ưa thích</a></li>
                <hr>
                <li><a href="#">cài đặt</a></li>
                <hr>
                <?php 
                   
                if(isset($_SESSION['tk'])){
                    echo "<li><a href='/data/login/logout.php?page_layout=dang_xuat'>Đăng xuất</a></li>"; 
                    }else{
                        if(isset($_SESSION['khach'])){
                            echo "<li><a href='/data/login/logout.php?page_layout=dang_nhap'>Đăng nhập</a></li>"; 
                        }
                    } ?>
            </ul>
        </li>
    </ul>
</nav>




<div class="profile-container">
    <!-- Ảnh bìa -->
    <div class="hinhphu"></div>

    <!-- Hình đại diện -->
    <img class="avatar" src="/data/img/hinhdaidien.jpg" alt="Avatar">

    <!-- Thông tin -->
    <div class="profile-info">
        <h1><?php 
    if(isset($_SESSION['tk'])){
        echo "<h1>" . $_SESSION['tk'] . "</h1>";
    } 
?></h1>
        <p></p>
    </div>
</div>


<footer style="margin-top:281px;">  
    <div class="footer_bloggame">  
        <p><strong>BLOGGAME.NET</strong></p>
        <p><strong style="color: #ccc;text-transform:none; font-size:15px" >Blog game - Chia sẻ thông tin
        <wbr>kiến thức về game</strong></p>
    </div>
</footer>

</body>
</html>
