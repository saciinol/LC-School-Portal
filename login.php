<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $user_type = $POST['user_type'];

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {

        //hashing the password
        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
                if ($row['user_type'] == 'user') {
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];

                    $_SESSION['image_url'] = $row['image_url'];
                    $_SESSION['course'] = $row['course'];
                    $_SESSION['year_level'] = $row['year_level'];
                    $_SESSION['last_name'] = $row['last_name'];
                    $_SESSION['first_name'] = $row['first_name'];
                    $_SESSION['middle_name'] = $row['middle_name'];
                    $_SESSION['name_suffix'] = $row['name_suffix'];
                    $_SESSION['birth_date'] = $row['birth_date'];
                    $_SESSION['age'] = $row['age'];
                    $_SESSION['birth_place'] = $row['birth_place'];
                    $_SESSION['gender'] = $row['gender'];
                    $_SESSION['civil_status'] = $row['civil_status'];
                    $_SESSION['nationality'] = $row['nationality'];
                    $_SESSION['religion'] = $row['religion'];
                    $_SESSION['home_address'] = $row['home_address'];
                    $_SESSION['zip_code'] = $row['zip_code'];
                    $_SESSION['home_contact_no'] = $row['home_contact_no'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['mobile_no'] = $row['mobile_no'];
                    $_SESSION['socmed_profile'] = $row['socmed_profile'];
                    $_SESSION['father_name'] = $row['father_name'];
                    $_SESSION['mother_name'] = $row['mother_name'];


                    header("Location: home.php");
                    exit();
                } elseif ($row['user_type'] == 'admin') {
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];

                    // $_SESSION['last_name'] = $row['last_name'];
                    // $_SESSION['first_name'] = $row['first_name'];
                    // $_SESSION['middle_name'] = $row['middle_name'];
                    // $_SESSION['birth_date'] = $row['birth_date'];
                    // $_SESSION['age'] = $row['age'];
                    // $_SESSION['birth_place'] = $row['birth_place'];
                    // $_SESSION['civil_status'] = $row['civil_status'];
                    // $_SESSION['nationality'] = $row['nationality'];
                    // $_SESSION['religion'] = $row['religion'];
                    // $_SESSION['home_address'] = $row['home_address'];
                    // $_SESSION['zip_code'] = $row['zip_code'];
                    // $_SESSION['home_contact_no'] = $row['home_contact_no'];
                    // $_SESSION['email'] = $row['email'];
                    // $_SESSION['mobile_no'] = $row['mobile_no'];
                    // $_SESSION['socmed_profile'] = $row['socmed_profile'];
                    // $_SESSION['father_name'] = $row['father_name'];
                    // $_SESSION['mother_name'] = $row['mother_name'];


                    header("Location: admin-find-student.php");
                    exit();
                }
            } else {
                header("Location: index.php?error=Incorrect User name or password");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorrect User name or password");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
