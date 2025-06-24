<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['course']) && isset($_POST['year_level']) && isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['middle_name']) && isset($_POST['name_suffix']) && isset($_POST['birth_date']) && isset($_POST['age']) && isset($_POST['birth_place']) && isset($_POST['gender']) && isset($_POST['civil_status']) && isset($_POST['nationality']) && isset($_POST['religion']) && isset($_POST['home_address']) && isset($_POST['zip_code']) && isset($_POST['home_contact_no']) && isset($_POST['email']) && isset($_POST['mobile_no']) && isset($_POST['socmed_profile']) && isset($_POST['father_name']) && isset($_POST['mother_name']) && isset($_FILES['input-file'])) {




    echo "<pre>";
    print_r($_FILES['input-file']);
    echo "</pre>";

    $img_name = $_FILES['input-file']['name'];
    $img_size = $_FILES['input-file']['size'];
    $temp_name = $_FILES['input-file']['tmp_name'];
    $error = $_FILES['input-file']['error'];

    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: registration.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = './images/users/' . $new_img_name;
                move_uploaded_file($temp_name, $img_upload_path);

                // INSERT INTO DATABASE
                $sql5 = "INSERT INTO users(image_url) VALUES ('$new_img_name')";
                mysqli_query($conn, $sql5);
            } else {
                $em = "You can't upload files of this type";
                header("Location: registration.php?error=$em");
            }
        }
    }



    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    $course = validate($_POST['course']);
    $year_level = validate($_POST['year_level']);
    $last_name = validate($_POST['last_name']);
    $first_name = validate($_POST['first_name']);
    $middle_name = validate($_POST['middle_name']);
    $name_suffix = validate($_POST['name_suffix']);
    $birth_date = validate($_POST['birth_date']);
    $age = validate($_POST['age']);
    $birth_place = validate($_POST['birth_place']);
    $gender = validate($_POST['gender']);
    $civil_status = validate($_POST['civil_status']);
    $nationality = validate($_POST['nationality']);
    $religion = validate($_POST['religion']);
    $home_address = validate($_POST['home_address']);
    $zip_code = validate($_POST['zip_code']);
    $home_contact_no = validate($_POST['home_contact_no']);
    $email = validate($_POST['email']);
    $mobile_no = validate($_POST['mobile_no']);
    $socmed_profile = validate($_POST['socmed_profile']);
    $father_name = validate($_POST['father_name']);
    $mother_name = validate($_POST['mother_name']);

    $user_data = 'uname=' . $uname . '&course=' . $course . '&year_level=' . $year_level . '&last_name=' . $last_name . '&first_name=' . $first_name . '&middle_name=' . $middle_name . '&name_suffix=' . $name_suffix . '&birth_date=' . $birth_date . '&age=' . $age . '&birth_place=' . $birth_place . '&gender=' . $gender . '&civil_status=' . $civil_status . '&nationality=' . $nationality . '&religion=' . $religion . '&home_address=' . $home_address . '&zip_code=' . $zip_code . '&home_contact_no=' . $home_contact_no . '&email=' . $email . '&mobile_no=' . $mobile_no . '&socmed_profile=' . $socmed_profile . '&father_name=' . $father_name . '&mother_name=' . $mother_name;


    if (empty($uname)) {
        header("Location: registration.php?error=User Name is required&$user_data");
        exit();
    } else if (empty($pass)) {
        header("Location: registration.php?error=Password is required&$user_data");
        exit();
    } else if (empty($course)) {
        header("Location: registration.php?error=Last Name is required&$user_data");
        exit();
    } else if (empty($year_level)) {
        header("Location: registration.php?error=First Name is required&$user_data");
        exit();
    } else if (empty($last_name)) {
        header("Location: registration.php?error=Last Name is required&$user_data");
        exit();
    } else if (empty($first_name)) {
        header("Location: registration.php?error=First Name is required&$user_data");
        exit();
    } else if (empty($middle_name)) {
        header("Location: registration.php?error=Middle Name is required&$user_data");
        exit();
    } else if (empty($birth_date)) {
        header("Location: registration.php?error=Birth Date is required&$user_data");
        exit();
    } else if (empty($age)) {
        header("Location: registration.php?error=Age is required&$user_data");
        exit();
    } else if (empty($birth_place)) {
        header("Location: registration.php?error=Birth Place is required&$user_data");
        exit();
    } else if (empty($gender)) {
        header("Location: registration.php?error=Birth Place is required&$user_data");
        exit();
    } else if (empty($civil_status)) {
        header("Location: registration.php?error=Civil Status is required&$user_data");
        exit();
    } else if (empty($nationality)) {
        header("Location: registration.php?error=Nationality is required&$user_data");
        exit();
    } else if (empty($religion)) {
        header("Location: registration.php?error=Religion is required&$user_data");
        exit();
    } else if (empty($home_address)) {
        header("Location: registration.php?error=Home Address is required&$user_data");
        exit();
    } else if (empty($zip_code)) {
        header("Location: registration.php?error=Zip Code is required&$user_data");
        exit();
    } else if (empty($home_contact_no)) {
        header("Location: registration.php?error=Home Contact Number is required&$user_data");
        exit();
    } else if (empty($email)) {
        header("Location: registration.php?error=Email is required&$user_data");
        exit();
    } else if (empty($mobile_no)) {
        header("Location: registration.php?error=Mobile Number is required&$user_data");
        exit();
    } else if (empty($father_name)) {
        header("Location: registration.php?error=Father's Name is required&$user_data");
        exit();
    } else if (empty($mother_name)) {
        header("Location: registration.php?error=Mothers's Name is required&$user_data");
        exit();
    } else {

        //hashing the password
        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE user_name='$uname' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: registration.php?error=The username is taken try another&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO users(user_name, password, course, year_level, last_name, first_name, middle_name, name_suffix, birth_date, age, birth_place, gender, civil_status, nationality, religion, home_address, zip_code, home_contact_no, email, mobile_no, socmed_profile, father_name, mother_name) VALUES('$uname', '$pass', '$course', '$year_level', '$last_name', '$first_name', '$middle_name', '$name_suffix', '$birth_date', '$age', '$birth_place', '$gender', '$civil_status', '$nationality', '$religion', '$home_address', '$zip_code', '$home_contact_no', '$email', '$mobile_no', '$socmed_profile', '$father_name', '$mother_name')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: registration.php?success=Your account has been created successfully");
                exit();
            } else {
                header("Location: registration.php?error=unknown error occured&$user_data");
                exit();
            }
        }
    }
} else {
    header("Location: registration.php");
    exit();
}
