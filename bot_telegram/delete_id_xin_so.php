<?php
    include 'connect.php';
    // tạo connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // kiểm tra connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // đặt chế độ lỗi PDO thành ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // bắt đầu giao dịch
        $conn->beginTransaction();
        // câu lệnh SQL của chúng tôi
        $conn->exec("DELETE FROM `id_lay_lode`");
        // cam kết giao dịch
        $conn->commit();
        echo "Delete id lấy lô đề thành công \n";
    } catch(PDOException $e) {
        // quay trở lại giao dịch nếu điều gì đó không thành công
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // đặt chế độ lỗi PDO thành ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // bắt đầu giao dịch
        $conn->beginTransaction();
        // câu lệnh SQL của chúng tôi
        $conn->exec("DELETE FROM `id_lay_cang`");
        // cam kết giao dịch
        $conn->commit();
        echo "Delete id lấy càng thành công \n";
    } catch(PDOException $e) {
        // quay trở lại giao dịch nếu điều gì đó không thành công
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // đặt chế độ lỗi PDO thành ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // bắt đầu giao dịch
        $conn->beginTransaction();
        // câu lệnh SQL của chúng tôi
        $conn->exec("DELETE FROM `id_lay_stl`");
        // cam kết giao dịch
        $conn->commit();
        echo "Delete id lấy song thủ lô thành công";
    } catch(PDOException $e) {
        // quay trở lại giao dịch nếu điều gì đó không thành công
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }
?>