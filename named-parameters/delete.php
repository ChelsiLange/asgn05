<?php

include 'connect.php';

$stmt = $db->prepare("DELETE FROM birds WHERE common_name = :common_name");

$stmt->bindValue(':common_name', 'American Redstart');
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