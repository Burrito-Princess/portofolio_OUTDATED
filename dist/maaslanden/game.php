<?php

include "db.php";

$tile_name = array(
  "0" => "empty",
  "1" => "Fishing",
  "2" => "Nuclear",
  "3" => "Farming",
  "4" => "Tourism",
  "5" => "Forest",
  "6" => "Mining"
);
$fishing = 0;
$nuclear = 0;
$farming = 0;
$tourism = 0;
$forest = 0;
$mining = 0;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  $sql = "SELECT * FROM game_" . $_GET['game'] . " WHERE id =" . $_GET['city'];
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  echo $result["name"] . "<br>";

