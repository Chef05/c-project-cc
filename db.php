<?php
// กำหนดค่าการเชื่อมต่อฐานข้อมูล (ใช้ค่าจาก InfinityFree)
$host = 'sql105.infinityfree.com';  // MySQL Hostname
$dbname = 'if0_38472478_event_db';  // Database Name
$username = 'if0_38472478';         // MySQL Username
$password = 'Za242548'; // ใช้รหัส vPanel ของคุณ

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  
    
} catch (PDOException $e) {
    echo ": " . $e->getMessage();
    exit;
}
?>
sql105.infinityfree.com