<?php

include 'connect.php';

$stmt = $db->query("SELECT * FROM birds WHERE backyard_tips REGEXP 'feeder'");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo htmlentities($row['common_name']) . "<br>";
}