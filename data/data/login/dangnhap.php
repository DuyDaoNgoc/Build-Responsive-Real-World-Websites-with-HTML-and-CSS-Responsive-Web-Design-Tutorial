<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();


if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $httpsUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: $httpsUrl");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en, vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/data/img/images.png" >
    <title>Đăng nhập</title>
    
    
    <style>
        @keyframes anhdong {
  0% {
    background-position: 0% 50%; /*định dạng vị trí phần tử*/
  }
  50% {
    background-position: 100% 50%;
  } 
  100% {
    background-position: 0% 50%;
  }
}

        body {
  margin: 0;
  height: 100vh; /*viewport height*/
  background: linear-gradient( 90deg, red,blue,green,yellow);   /*chuyển dọc hoặc ngang*//*90 độ và 4 màu*/
  background-size: 400% 400%;
  animation: anhdong 3s ease infinite; /*vòng lặp*/
  display: flex;
            justify-content: center; /*căn chỉnh nội dung*/
}

        .form {
            display: flex;
            flex-wrap: wrap; /*Khi không gian không đủ, các phần tử sẽ tự động chuyển sang dòng tiếp theo.*/
            flex-direction: column; /*hiển thị (bố trí phần tử)*/
            margin-top: 150px;
            text-shadow: #333;
            box-shadow: 1px 15px 20px rgba(0, 0, 0, 0.4);
            object-fit: cover; /*căn chỉnh và có kích thước */
            width: max-content;
            padding: 30px;
            text-transform: uppercase; /*thay đổi hiển thị text*/
            font-family: Arial, Helvetica, sans-serif;/*kiểu chữ*/
            align-items: flex-end; /*kiểm soát phần tử con*/
            z-index: 10; /*đè*/
            background-color: white;
            position:fixed; /*định dạng vị trí pt*/
        }
        .form h1 {
            text-align: center;
            text-transform: uppercase;
            font-family: Arial, Helvetica, sans-serif;
        }
        .div1 {
            margin-top: 5px;
        }
       
        .submit-login{
            background-color: blue;
            color: white;
            border: 1px solid aquamarine;
            padding: 5px;
        }
        .thanhdangnhap{
            border-radius: 30px 30px;
        }
    </style>
</head>
<body>

<form action="" method="post" class="form" novalidate>
    <h1>Đăng nhập</h1>
    <div>
        <label for="tk">Tài khoản</label>
        <input type="text" name="tk" value="<?php echo isset($_POST['tk']) ? htmlspecialchars($_POST['tk']) : ''; ?>" required class="thanhdangnhap">
    </div>
    <div class="div1">
        <label for="mk">Mật khẩu</label>
        <input type="password" name="mk" value="<?php echo isset($_POST['mk']) ? htmlspecialchars($_POST['mk']) : ''; ?>" required class="thanhdangnhap">
    </div>
    <input type="submit" name="submit" value="Đăng nhập" style="margin-top:5px;" class="submit-login">
    <div>
    <input type="submit" name="submit2" value="khách mời" style=" margin-top:5px;" class="submit-login">
    </div>
   
    <span style="font-size: 13px; text-align:center;">
        
        <?php
        if (isset($_POST['submit'])) {
            $taikhoan = htmlspecialchars($_POST['tk']) ??'';
            $matkhau = htmlspecialchars($_POST['mk']) ?? '';

            if (empty($taikhoan) || empty($matkhau)) {
                echo "<p style='color:red'>Vui lòng nhập tài khoản và mật khẩu!</p>";
            } else {
                if ($taikhoan === 'kinbingo18' && $matkhau === '12345678') {
                    $_SESSION['tk'] = $taikhoan;
                    echo "<p style='color:green'>Đăng nhập thành công</p>";
                    header("Location: /data/blog/Trangchu.php?page_layout=Trangchu");
                    exit();
                } else {
                    echo "<p style='color:red'>Sai tài khoản hoặc mật khẩu!</p>";
                }if($taikhoan == 'Duy04' && $matkhau == 'duypro0478'){
                    $_SESSION['tk'] = $taikhoan;
                    echo "<p style='color:green'>Đăng nhập thành công</p>";
                    header("Location: /data/blog/Trangchu.php?page_layout=Trangchu");
                    exit();
                }
                    
        
            }}
            if(isset($_POST['submit2'])){
                $khach = $_POST['khach'] ?? '';
               if(isset($khach)){
                     $_SESSION['khach'] = $khach ;
                     echo " khách mời ";
                     header("Location: /data/blog/Trangchu.php?page_layout=Trangchu");
               }    
            }
        ?>
    </span>
</form>
     
</body>
</html>
<?php
if(!isset($_SESSION['khach'])){
   echo "<script> alert('Vui lòng đăng nhập') </script> ";
   $_SESSION['khach'] = true;
}        
?>