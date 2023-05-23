<?php
    include_once 'connect.php';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'UTF8');
    
    if (isset($_POST['upload'])) {
        $errors = [];
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_parts = explode('.', $_FILES['image']['name']);
        $file_ext = strtolower(end($file_parts));
        $expensions = ["jpeg", "jpg", "png"];
        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
        }
        if ($file_size > 2097152) {
            $errors[] = 'Kích thước file không được lớn hơn 2MB';
        }
        $image = $_FILES['image']['name'];
        $target = "photo/" . basename($image);
        $sql = "INSERT INTO images (image) VALUES ('$image')";
        mysqli_query($conn, $sql);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo '<script language="javascript">alert("Đã upload thành công!");</script>';
        } else {
            echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
        }
    }
    $result = mysqli_query($conn, "SELECT * FROM images");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Image Upload</title>
        <link rel="stylesheet" type="text/css" href="asset/style.css">
    </head>
    <body>
        <div id="content">
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000" />
                <input type="file" name="image" />
                <button type="submit" name="upload">POST</button>
               
            </form>
            <?php while ($row = mysqli_fetch_array($result)) {
                echo "<div id='img_div'>";
                echo "<img src='photo/" . $row['image'] . "' >";
                echo "</div>";
            } ?>
        </div>
    </body>
</html>
