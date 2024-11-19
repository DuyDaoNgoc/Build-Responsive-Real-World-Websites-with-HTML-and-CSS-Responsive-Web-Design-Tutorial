<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog game</title>
    <link rel="stylesheet" type="text/css" href="/data/blog/test.css">
    <link rel="icon" href="/data/img/images.png" >
    <link rel="stylesheet" type="text/css" href="/data/login/from-php.css">
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

<?php 

if(isset($_SESSION['tk'])) {
 
    if (!isset($_SESSION['nguoidung'])) {
        echo "<script>alert('Chào mừng " . $_SESSION['tk'] . " đã đến với Blog của chúng tôi');</script>"; 
        $_SESSION['nguoidung'] = true;  
    }
} else {

    if (!isset($_SESSION['khach'])) {
        echo "<script>alert('Chào mừng khách mời đến với Blog của chúng tôi');</script>";
        $_SESSION['khach'] = true;  
    }
}
?>

<h1 align="center" style="text-transform: uppercase; font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Nổi bật</h1>
<p align="center" style="margin-top: -10px; color: rgb(159, 153, 153);">Blog game - Chia sẻ thông tin kiến thức về game</p>

<article>
    
    <figure>
        <a href="/data/blog/pantheon.php">
        <img src="/data/img/lmht162d8d7f92b5c0_d89be1a268a683d9300be7d63724365e.jpeg" alt="Pantheon">
        <figcaption>
            <h3>LMHT dự kiến 27/07: Pantheon sắp được Riot hồi sinh thành "Thần Rừng" ở bản 12.14 sắp tới</h3>
        </figcaption>
        <div class="figure-div">21/07/2022 | The Mood</div>
        <div class="figure2">  
            LMHT Pantheon sắp được Riot hồi sinh thành "Thần Rừng" ở phiên bản 12.14 dự kiến sẽ được ra mắt vào ngày 27/7 tới.
        </div>
        </a>
    </figure>           


    <figure>
        <a href="/data/blog/viego.php">
        <img src="/data/img/viego.jpeg" alt="Viego">
        <figcaption>
            <h3>Fix lỗi liên quan đến Gươm Vô Danh khiến cộng đồng Liên Minh Huyền Thoại ức chế ?!</h3>
        </figcaption>
        <div class="figure-div">21/07/2022 | The Mood</div>
        <div class="figure2">  
            Theo cộng đồng LMHT vừa phát hiện, khi người chơi mua Gươm Vô Danh sau khi đã mua 
            các món trang bị 
            khác, thì món đồ này sẽ bị giảm đi 5 điểm damage.
        </div>
        </a>
    </figure>
    
    <figure>
        <a href="#">
        <img src="/data/img/ashe.jpg" alt="Ashe">
        <figcaption>
            <h3>Trọn bộ hình nền Tiên Hắc Ám LMHT mới full HD cho Desktop</h3>
        </figcaption>
        <div class="figure-div">21/07/2021 | Đ.Nguyệt</div>
        <div class="figure2">  
             
							Tải miễn phí bộ hình nền Tiên Hắc Ám mới đẹp full HD cho máy tính. Tải hình nền LMHT Tiên hắc ám cho Ashe, Evelynn, Ahri, Malphite, 
                            Warwick, Cassiopeia và đặc biệt là sự xuất hiện của hình nền Leblanc tiên hắc ám hàng hiệu đẹp ná thở.						
        </div>
        </a>
    </figure>
    <figure>
        <a href="#">
        <img src="/data/img/pubg.jpeg" alt="Pubg">
        <figcaption>
            <h3>[Hot]  Cho rằng Free Fire đạo nhái  PUBG Mobile kiện cả Garena, Apple lẫn Google</h3>
        </figcaption>
        <div class="figure-div">17/01/2022 | Thanh Tâm</div>
        <div class="figure2">  
            Krafton và PUBG Santa Monica, những đơn vị sở hữu bản quyền PUBG 
            Mobile vừa đệ đơn kiện Garena Online với cáo buộc phiên bản game mobile Free 
            Fire Max ăn cắp ý tưởng game battle royale phiên bản mobile của họ. Nhân tiện, Krafton 
            và chi nhánh ở California của hãng game Hàn Quốc cũng kiện luôn cả Google và Apple vì Play Store và 
            App Store đã tiếp tay phân phối tác phẩm đạo nhái ý tưởng.						
        </div>
        </a>
    </figure>
    <figure>
        <a href="#">
        <img src="/data/img/kdaallouthinhnen4k5f83dfe705374_415df1a6c93d456f2cd851e54a7efe67.jpg" alt="Pubg">
        <figcaption>
            <h3>Hình nền bộ skin K/DA All Out 4K Liên Minh Huyền Thoại mới với Seraphine</h3>
        </figcaption>
        <div class="figure-div">12/10/2020 | Đ.Nguyệt</div>
        <div class="figure2">  
            
							Bloggame.net chia sẻ đến các bạn bộ hình nền K/DA ALL OUT Akali, Evelynn, Ahri, Kai'Sa và Seraphine 4K Full HD dành cho desktop mới nhất. Các fan của liên minh huyền thoại và đặc biệt là fan của nhóm nhạc KDA sẽ rất háo hức với bộ hình nền này.						
        </div>
        </a>
    </figure>
    <figure>
        <a href="#">
        <img src="/data/img/hinhnenhocvienchienbinh2021fullhd60405209efc1a_d579705554b0c02b74214d4cd8c81e57.jpg" alt="hinh nen hoc vien chien binh">
        <figcaption>
            <h3>Tổng hợp bộ hình nền Học Viện Chiến Binh 2021 LMHT Full HD</h3>
        </figcaption>
        <div class="figure-div">04/03/2021 | Đ.Nguyệt</div>
        <div class="figure2">  
             
							Chia sẻ bộ hình nền trang phục Học Viện Chiến Binh 2021 với các học sinh caitlyn, wukong, garen, 
                            yone, leona. Bộ hình nền 
                            LMHT Học viện chiến binh full HD đẹp cho bạn tải về làm hình nền desktop cực chất.						
        </div>
        </a>
    </figure>
    <figure>
        <a href="#">
        <img src="/data/img/hinhnenhocvienchienbinh2021fullhd60405209efc1a_d579705554b0c02b74214d4cd8c81e57.jpg" alt="hinh nen hoc vien chien binh">
        <figcaption>
            <h3>Tổng hợp bộ hình nền Học Viện Chiến Binh 2021 LMHT Full HD</h3>
        </figcaption>
        <div class="figure-div">04/03/2021 | Đ.Nguyệt</div>
        <div class="figure2">  
             
							Chia sẻ bộ hình nền trang phục Học Viện Chiến Binh 2021 với các học sinh caitlyn, wukong, garen, 
                            yone, leona. Bộ hình nền 
                            LMHT Học viện chiến binh full HD đẹp cho bạn tải về làm hình nền desktop cực chất.						
        </div>
        </a>
    </figure>
    <figure>
        <a href="#">
        <img src="/data/img/hinhnenhocvienchienbinh2021fullhd60405209efc1a_d579705554b0c02b74214d4cd8c81e57.jpg" alt="hinh nen hoc vien chien binh">
        <figcaption>
            <h3>Tổng hợp bộ hình nền Học Viện Chiến Binh 2021 LMHT Full HD</h3>
        </figcaption>
        <div class="figure-div">04/03/2021 | Đ.Nguyệt</div>
        <div class="figure2">  
             
							Chia sẻ bộ hình nền trang phục Học Viện Chiến Binh 2021 với các học sinh caitlyn, wukong, garen, 
                            yone, leona. Bộ hình nền 
                            LMHT Học viện chiến binh full HD đẹp cho bạn tải về làm hình nền desktop cực chất.						
        </div>
        </a>
    </figure>
    <figure>
        <a href="#">
        <img src="/data/img/chiasenohinhnenlienquanphienbanlaplanhchodienthoai5febf8ef8c762_f35b23749b08081ecef9ceee3dffb589.jpg" alt="hinh nen hoc vien chien binh">
        <figcaption>
            <h3>Chia sẻ bộ hình nền Liên Quân Phiên bản lấp lánh cho điện thoại</h3>
        </figcaption>
        <div class="figure-div">30/12/2020 | Bùi Luân</div>
        <div class="figure2">  
             
							 
        Đây là bộ hình nền vô cùng đặc biệt so với những hình ảnh các bạn đã biết trong game. Skin của các tướng được "độ" thêm những ánh sao lấp lánh vô cùng ấn tượng.										
        </div>
        </a>
    </figure>
    


</article>
                    <div class="xemthem"><a href="#" >xem thêm</a></div>


<footer style="margin-top:100px;">  
   <div class="footer_bloggame" >  
    <p><strong>BLOGGAME.NET</strong></p>
    <p><strong style="color: #ccc;text-transform:none; font-size:15px" >Blog game - Chia sẻ thông tin
        <wbr>kiến thức về game</strong></p>
   </div>

       
</footer>

</body>
</html>
