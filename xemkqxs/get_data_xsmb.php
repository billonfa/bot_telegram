<?php
include_once 'connect.php';
$date = getdate();
if($date['hours'] < 18 && $date['minutes'] < 50) $date['mday'] -= 1;
if($date['mon'] < 10) $date['mon'] = "0".$date['mon'];
$date = $date['year'] . "-" . $date['mon'] . "-" .$date['mday'];


// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Lấy dữ liệu từ bảng users
$sql = "SELECT * FROM data_xskt_mb WHERE created_at = '$date'";
$result = $conn->query($sql);

// Tạo mảng chứa dữ liệu
$data = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    array_push($data, $row);
  }
}

// Trả về dữ liệu dưới dạng JSON
header('Content-Type: application/json');
echo json_encode($data);
// Đóng kết nối
$conn->close();
?>
