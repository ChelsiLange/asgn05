<?php

include 'connect.php';

$stmt = $db->query("SELECT * FROM birds WHERE food = 'Insects' AND habitat = 'Open woodlands'");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo htmlentities($row['common_name']) . "<br>";
}