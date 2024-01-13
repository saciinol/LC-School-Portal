<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM users WHERE id NOT IN (1) ORDER BY last_name");
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

return $stmt->FetchAll();
