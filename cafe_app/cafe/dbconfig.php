<?php

//set the values here
$db_url = "infrastructure-mydb-bqocnrtliqn9.cr2e0oikukiu.us-east-1.rds.amazonaws.com";
$db_user = "admin";
$db_password = "Re:Start!9";
$db_name = "cafe_db";

try {
    $pdo = new PDO("mysql:host=$db_url;dbname=$db_name", $db_user, $db_password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
