<?php
    include 'functions.php';
    include 'conn.php';
    if (isset($_POST['checkcourse'])) {
        $ct = trim(Check($_POST['ct'])); 
        
        $query = mysqli_query($conn, "SELECT * FROM course WHERE title ='$ct'");
        if (mysqli_num_rows($query) > 0) {
            echo 'COURSE ALREADY EXIST';
        }else{
            echo 'OK';
        }

        }


    if (isset($_POST['addcourse'])) {
        $ct = strtolower(trim(Check($_POST['ct']))); 
        
        $query = mysqli_query($conn, "SELECT * FROM course WHERE title ='$ct'");
        if (mysqli_num_rows($query) > 0) {
            echo 'COURSE ALREADY EXIST....';
            exit();
        }else{
            // INSERT COURSE INTO DATA BASE 
            $query = mysqli_query($conn, "INSERT INTO `course`(`title`) VALUES ('$ct')");
            if (!$query) {
                die('UNABLE TO ADD USER...');
               
            }else{
                echo strtoupper($ct). " ADDED SUCCESSFULLY";
            }
        }

    }

?>