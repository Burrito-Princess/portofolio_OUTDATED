<?php

include "db.php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

    $sql = "SELECT * FROM game_variables WHERE game_id =" . $_GET['game'] . " AND kind = 'city'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>"; print_r($result);
    $typerandom = rand(0, count($result) - 1);
    $type = $result[$typerandom]["variable"];
    echo $type . "<br>";
    //REMEMBER TO ADD THE CAPITAL TO THE GAME VARIABLES TABLE
    if ($type == "capital"){
        $stmt = $conn->prepare("DELETE FROM game_variables WHERE variable = 'capital' AND game_id = " . $_GET['game']);
        $stmt->execute();
    }

    $sql = "SELECT * FROM game_variables WHERE game_id =" . $_GET['game'] . " AND kind = 'city_name'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>"; print_r($result);
    $namerandom = rand(0, count($result) - 1);
    $name = $result[$namerandom]["variable"];
    echo $name . "<br>";
    //REMEMBER REENABLE THE NEXT 2 LINES!!
    // $stmt = $conn->prepare("DELETE FROM game_variables WHERE variable = '$name' AND game_id = " . $_GET['game']);
    // $stmt->execute();
    $sql = "SELECT * FROM game_variables WHERE game_id =" . $_GET['game'] . " AND kind = 'industry'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>"; print_r($result);
    $industryrandom = rand(0, count($result) - 1);
    $industry = $result[$industryrandom]["variable"];
    echo $industry . "<br>";
    $initial_pop = rand(100000, 500000);
    echo $initial_pop . "<br>";
    $current_pop = $initial_pop;
    
  
  
//   $sql = "INSERT INTO game_" . $_GET['game'] . "(type, name, industry, initial_pop, current_pop, city_id) VALUES ($type, $name, $industry, $initial_pop, $current_pop, $city_id)";

//   $stmt = $conn->prepare($sql);
//   $stmt->execute();
//   $result = $stmt->fetch(PDO::FETCH_ASSOC);