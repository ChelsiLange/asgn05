<?php

include 'connect.php';

$stmt = $db->prepare("SELECT * FROM names WHERE firstname = ?");
$id = 3;
$names = array('Andy', 'Brian', 'Godfrey');

foreach ($names as $name) {
$stmt->bindParam(1, $name);

$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo htmlentities($row['firstname']). " " .htmlentities($row['lastname']). " " .htmlentities($row['postcode']). "<br>";
}
}