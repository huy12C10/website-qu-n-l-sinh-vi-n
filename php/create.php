<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/style.css">

<title>Thêm Sinh Viên</title>
</head>
<body>
<?php
include("connect.php");
//Xử lý dữ liệu submit bằng phương thức POST của người dùng
if (isset($_POST['submit'])) {
$fullname = $_POST['fullname'];
$gioitinh = $_POST['gioitinh'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
//Câu lệnh insert
$sql = "INSERT INTO students(hovaten, gioitinh, email, mobile) 
VALUES('$fullname', '$gioitinh', '$email', '$mobile')";
//Thực thi câu lệnh SQL
$result = $conn->query($sql);
//Kiểm tra lỗi
if(!$result){
die("Lỗi kết nối: " . $conn->connect_error);
}
//Chuyển tiếp về trang index khi thêm mới thành công
header("location: ../index.php"); 
exit;
}
?>
<div class="container">
          <h3 class="title">Thêm mới sinh viên</h3>
             <form method="post">
                 <div>
                    <label for="fullname">Họ và tên</label>
                    <input type="text" name="fullname">
                    </div>
                    <div>
                    <label for=" email">Email</label>
                    <input type="email" name="email">
                    </div>
                    <div>
                    <label for="gioitinh">Giới tính</label>
                    <input type="text" name="gioitinh">
                    </div>
                    <div>
                     <label for="mobile">Điện thoại</label>
                    <input type="text" name="mobile">
                    </div>
                    <input type="submit" name="submit" value="Thêm mới">
                  
                    <a href="../index.php"><input type="button" value="Hủy" class="cancel"></a>
</form>
</div>
</body>
</html>