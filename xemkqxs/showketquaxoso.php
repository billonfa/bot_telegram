<?php
include_once 'connect.php';
// tạo connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// kiểm tra connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
  <div class="kqxs">  
    <div class="show_kqxs">
      <div class="title-h2">
        KẾT QUẢ XỔ SỐ KIẾN THIẾT <span id="days"> </span>
      </div>
      <div class="button_kqxs"> 
      <button class="snip1457" id="btn1">Miền Bắc</button>
      <button class="snip1457" id="btn2">Miền Trung</button>
      <button class="snip1457" id="btn3">Miền Nam</button>
      </div>
      <table id="myTable" >
    
      </table>
    </div>

  </div>
</body>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="asset/style.js"></script>

</html>