<?php

include 'connect.php';

$stmt = $db->prepare("INSERT INTO names (firstname, lastname, postcode) VALUES (:firstname, :lastname, :postcode)");

$stmt->bindValue(':firstname', 'kndira');
$stmt->bindValue(':lastname', 'kguana');
$stmt->bindValue(':postcode', 'kGI IGI');
$stmt->execute();