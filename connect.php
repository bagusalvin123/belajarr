<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=belajar", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";

  $sql = "
    INSERT INTO 
    siswa (nama, kelas, alamat)
    VALUES ('Agus Nurwanto', '7', 'Desa Gulun Kec. Maospati Magetan')
  ";
  $conn->exec($sql);
  echo "New record created successfully";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>