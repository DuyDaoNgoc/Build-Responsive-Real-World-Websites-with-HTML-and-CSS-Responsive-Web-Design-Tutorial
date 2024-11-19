
<?php  session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fix lỗi liên quan đến Gươm Vô Danh khiến cộng đồng Liên Minh Huyền Thoại ức chế ?!</title>
    <link rel="stylesheet" type="text/css" href="/data/blog/test.css">
    <link rel="icon" href="/data/img/images.png" >
    <link rel="stylesheet" type="text/css" href="/data/login/from-php.css">
    <link rel="stylesheet" href="/data/blog/pantheon.css">
</head>
<body>
    
        <script>
            // Kiểm tra phần tử có vào vùng hiển thị không
        function checkVisibility() {
          const elements = document.querySelectorAll('.element');
          
          elements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top >= 2 && rect.bottom <= window.innerHeight) {
              element.classList.add('visible'); // Thêm lớp 'visible' khi phần tử vào vùng hiển thị
            }
          });
        }
        
        // Kiểm tra mỗi khi người dùng cuộn trang
        window.addEventListener('scroll', checkVisibility);
        
        // Kiểm tra lần đầu khi tải trang
        checkVisibility();
        
        </script>
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
        
            
                <li><a href="/data/blog/trangchu.php">Trang chủ</a></li>
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
                
                
                <li><a href="/data/bloggame.html" target="_blank">Chia sẻ</a></li>
                <li>Thông tin tài khoản
                    <ul class="sum-hover" style="border: 1px solid black;">
                    <?php      
                 
                           if (isset($_SESSION['tk'])) {
                           echo "<li><a href='/data/trangcanhan/Trangcanhan.php?page_layout=Trangcanhan' style='color:white'>trang cá nhân</a></li>";
                                                       } else{
                                                          if(isset($_SESSION['khach'])){
                                                            echo "<li><a href='/data/trangcanhan/Trangcanhan.php?page_layout=Trangcanhan' style='color:white'>trang cá nhân</a></li>";
                                                          }
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
                        echo "<li><a href='/data/login/logout.php'>Đăng xuất</a></li>"; 
                        }else{
                            if(isset($_SESSION['khach'])){
                                echo "<li><a href='/data/login/logout.php'>Đăng nhập</a></li>"; 
                            }
                        }
                        ?>
                    
                </ul>
                
            </ul>
        </nav>
        <div class="baibao">
          <h1 class="title">Fix lỗi liên quan đến Gươm Vô Danh khiến cộng đồng Liên Minh Huyền Thoại ức chế ?!</h1>
          <p class="small"> <small >21/07/2022 | The Mood</small></p>
           <p class="content">LMHT Pantheon sắp được Riot hồi sinh thành "Thần Rừng" ở phiên bản 12.14 dự kiến sẽ được ra mắt vào ngày 27/7 tới.</p>
     <P class="content  ">Nếu các bạn còn nhớ thì vào thời điểm mới được làm lại, Pantheon là một trong những tướng mạnh nhất LMHT và có tỷ lệ cấm chọn 100% tại CKTG 2019. Kể cả khi sang tới CKTG 2020 một năm sau đó thì Pantheon vẫn là một tướng mạnh,
     đa dụng và có thể chơi được nhiều vị trí từ Đường Giữa, Đi Rừng cho tới Hỗ Trợ.</P>
      <p class="p"><img src="/data/img/lmht162d8d7f92b5c0_d89be1a268a683d9300be7d63724365e.jpeg" alt=""></p>
      <p align="center"><small>Pantheon từng là tướng cực kỳ mạnh trong quá khứ</small></p>
      <p class="content">Tuy nhiên sau khi Riot Games cập nhật lại toàn bộ trang bị trong cửa hàng thì Pantheon dần bị lãng quên bởi các tướng khác cùng vị trí mạnh lên quá nhiều. 
        Có lẽ Riot Games nhận ra rằng mình cần phải giúp Pantheon có một vị trí vững chắc trong LMHT nên họ đã tìm cách nâng cấp sức mạnh của nhân vật này tại bản 12.14 sắp tới.</p>
    <p class="content">Cụ thể thì theo thông tin từ máy chủ thử nghiệm, lượng sát thương cường hóa từ chiêu Q - Ngọn Giáo Sao Băng của Pantheon khi gây lên quái rừng sẽ tăng từ 70% lên 120%. Thay đổi này sẽ giúp cho Pantheon dọn 
        rừng một cách vô cùng nhanh chóng và tận dụng khả năng khống chế của mình để tấn công đối thủ từ sớm.</p>
        </div>
        <footer style="margin-top:100px;">  
   <div class="footer_bloggame" >  
    <p><strong>BLOGGAME.NET</strong></p>
    <p><strong style="color: #ccc;text-transform:none; font-size:15px" >Blog game - Chia sẻ thông tin
        <wbr>kiến thức về game</strong></p>
   </div>

       
</footer>
</body>
</html>