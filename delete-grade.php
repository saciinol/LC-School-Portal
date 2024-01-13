<?php
$data = $_POST;
$grade_id = (int) $data['grade_id'];
$sub_name = $data['sub_name'];

try {
    $command = "DELETE FROM grades WHERE id={$grade_id}";

    include('connection.php');

    $conn->exec($command);

    echo json_encode([
        'success' => true,
        'message' => $sub_name . ' successfully deleted'
    ]);
} catch (PDOException $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Grade deletion error'
    ]);
}
