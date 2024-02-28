<?php


$host = "mysql";
$userName = "root";
$password = "root";

try {
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
  $pdo = new PDO("mysql:host=$host;dbname=bit-blog", $userName, $password, $options);

//   $user->first_name
//   $user['first_name']

  // set the PDO error mode to exception
//   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     return $pdo;

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}