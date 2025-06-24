<?php

include('connection.php');

// $user = ($_SESSION['users']);
$user = $_SESSION['id'];

$stmt = $conn->prepare("SELECT * FROM reg_card WHERE users_id = $user");
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

return $stmt->FetchAll();
