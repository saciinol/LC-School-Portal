<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {



    include "db_conn.php";

    if (isset($_POST['changePassword-current-password']) && isset($_POST['changePassword-new-password']) && isset($_POST['changePassword-confirmnew-password'])) {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $currentPassword = validate($_POST['changePassword-current-password']);
        $newPassword = validate($_POST['changePassword-new-password']);
        $confirmnewPassword = validate($_POST['changePassword-confirmnew-password']);

        if(empty($currentPassword)) {
            header("Location: home.php?error=Current Password is required");



            // AAYUSIN PA TO     
            echo "<script type=\"text/javascript\">
                    document.addEventListener('DOMContentLoaded', function() {
                        const overlayChangePW = document.querySelector('.changePassword');
                        overlayChangePW.classList.toggle('open');
                    };
                </script>";


                

            exit();
        }else if(empty($newPassword)) {
            header("Location: home.php?error=New Password is required");
            // echo "<script type=\"text/javascript\">
            //         document.addEventListener('DOMContentLoaded', function() {
            //             const overlayChangePW = document.querySelector('.changePassword');
            //             overlayChangePW.classList.toggle('open');
            //         };
            //     </script>";
            exit();
        }else if($newPassword !== $confirmnewPassword) {
            header("Location: home.php?error=The confirmation password does not match");
            // echo "<script type=\"text/javascript\">
            //         document.addEventListener('DOMContentLoaded', function() {
            //             const overlayChangePW = document.querySelector('.changePassword');
            //             overlayChangePW.classList.toggle('open');
            //         };
            //     </script>";
            exit();
        }else {

            //
            // COMMENT MUNA TO HANGGANG DI KO PA NAAYOS display:block; ng .changePassword
            //


            // hashing the password
            $currentPassword = md5($currentPassword);
            $newPassword = md5($newPassword);
            $id = $_SESSION['id'];

            $sql = "SELECT password FROM users WHERE id='$id' AND password='$currentPassword'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) === 1) {
                
                $sql2 = "UPDATE users SET password='$newPassword' WHERE id='$id'";
                mysqli_query($conn, $sql2);
                header("Location: home.php?success=Your password has been changed successfully");
                exit();

            }else{
                header("Location: home.php?error=Incorrect password");
                exit();
            }
        }

    } else {
        header("Location: home.php");
        exit();
    }
    
} else {
    header("Location: index.php");
    exit();
}
