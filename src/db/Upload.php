<?php
require_once 'SQLiteConnection.php';

if(ISSET($_POST['upload'])){
    $file = $_FILES['file'];

    $file_name = $file['name'];
    $file_temp = $file['tmp_name'];
 //   $file_type = $file['type'];
  //  $file_size = $file['size'];
    $exp = explode('.', $file_name);
    $name = $exp[0];
    $path = "upload/".$file_name;

    if(move_uploaded_file($file_temp, $path)){
        $query = "INSERT INTO `file` (file_name, file_type, file_size, location) VALUES(:file_name, :file_type, :file_size, :location)";
        $stmt = $con->prepare($query);
        $stmt->bindParam(':file_name', $name);
        $stmt->bindParam(':file_type', $file_type);
        $stmt->bindParam(':file_size', $file_size);
        $stmt->bindParam(':location', $path);

        $stmt->execute();
        $con = null;

        echo "<script>alert('File Uploaded')</script>";
        echo "<script>window.location='index.php'</script>";
    }
}