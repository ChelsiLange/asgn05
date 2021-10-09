<?php

include 'connect.php';

$stmt = $db->prepare("INSERT INTO birds (common_name, habitat, food, conservation_id, backyard_tips) VALUES (:common_name, :habitat, :food, :conservation_id, :backyard_tips)");

$stmt->bindValue(':common_name', 'American Redstart');
$stmt->bindValue(':habitat', 'deciduous forests');
$stmt->bindValue(':food', 'Insects');
$stmt->bindValue(':conservation_id', '1');
$stmt->bindValue(':backyard_tips', 'I\'ve only seen them around the yard once but they are really pertty');

$stmt->execute();

$stmt = $db->query("SELECT * FROM birds");

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach($results as $row) {
  $common_name = htmlentities($row['common_name']);
  $habitat = htmlentities($row['habitat']);
  $food = htmlentities($row['food']);
  $conservation_id = htmlentities($row['conservation_id']);
  $backyard_tips = htmlentities($row['backyard_tips']);

  echo $common_name . ' ' . $habitat . ' ' . $food ." " . $conservation_id . ' ' . $backyard_tips . ' ' . '<br>';
}