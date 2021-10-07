<?php

include 'connect.php';

$stmt = $db->prepare("UPDATE names set postcode = :postcode WHERE firstname = :firstname");

$stmt->bindValue(':firstname', 'kndira');
$stmt->bindValue(':postcode', 'new code');
$stmt->execute();