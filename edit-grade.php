<?php
    $data = $_POST;

    $grade_id = (int) $data['grade_id'];
    $grade_sub_name = $data['grade_sub_name'];
    $grade_units = $data['grade_units'];
    $grade_code = $data['grade_code'];
    $grade_semester = $data['grade_semester'];
    $grade_grade = $data['grade_grade'];
    
    try {
        $sql = "UPDATE grades SET subject_name=?, units=?, code=?, semester=?, grade=? WHERE id=?";

        include('connection.php');
        $conn->prepare($sql)->execute([$grade_sub_name, $grade_units, $grade_code, $grade_semester, $grade_grade, $grade_id]);

        echo json_encode([
            'success' => true,
            'message' => 'Grade successfully updated'
        ]);
    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Grade deletion error'
        ]);
    }
?>