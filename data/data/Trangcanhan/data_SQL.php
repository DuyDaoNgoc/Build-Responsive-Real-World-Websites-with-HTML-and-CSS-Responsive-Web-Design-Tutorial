

<?php   
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thong_tin_tk";  

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
die("Kết nối thất bại: " . $conn->connect_error);
}

// Kiểm tra nếu dữ liệu được gửi qua phương thức POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Lấy dữ liệu từ biểu mẫu
$name = $taikhoan;
$namsinh = $_POST['namsinh'];
$songuoi_theodoi = $_POST['nguoitheodoi'];
$bai_viet_da_dang = $_POST['dadang'];
$lich_su_da_xem = $_POST['lichsu'];
$nguoi_xem_hs = $_POST['nguoi_xemhs'];

// Tạo câu Lệnh SQL để thêm dữ liệu
$sql = "INSERT INTO trangcanhan_tk (tk,namsinh,nguoitheodoi,dadang,lichsu,nguoi_xemhs) 
VALUES ('$name', '$namsinh', '$songuoi_theodoi',$bai_viet_da_dang, $lich_su_da_xem ,$nguoi_xem_hs)";

// Thực thi câu lệnh SQL và kiểm tra kết quả

if ($conn->query($sql) === TRUE) {
    echo "Thêm dữ liệu thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
    </html> 



