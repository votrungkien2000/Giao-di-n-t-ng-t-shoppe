<?php
// define("DB_HOST", "localhost");
// define("DB_USER", "root");
// define("DB_PASS", "");
// define("DB_NAME", "quanlydathang");
// lấy dữ liệu từ form gửi lên 
$tk = $_POST['taikhoannd'];
$mk = $_POST['matkhaund'];
// kết nối cơ sở dữ liệu
$con = mysqli_connect("localhost", "root", "", "quanlydathang");
// câu lệnh truy vấn
$sql = "select * from khachhang where SoDienThoai='$tk' and Password='$mk'";
// thực thi câu lệnh truy vấn
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs)>0){
    echo "<h1> Đăng nhập thành công";
}
else{
    echo "<h1> Đăng nhập thất bại";
}
?>