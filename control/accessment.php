<?php
    include 'conn.php';

    if (isset($_POST['addAccessment'])) {
       $ct = $_POST['ct'];
        $u = $_POST['u'];
        $c = $_POST['c'];


        // CHECK IF THE ASSIGNEMT HAS BEEN ASSIGNEMT BEFORE 

        $checkQuery = mysqli_query($conn, "SELECT * FROM `upload` WHERE userid =$u and title='$ct' LIMIT 1 ");

        if (mysqli_num_rows($checkQuery) > 0) {
           echo "COURSE ALREADY ASSIGNED";
           exit();
        }else{

            if (!empty($c) AND !empty($u) AND !empty($ct)) {
                $query =mysqli_query($conn,  "INSERT INTO `upload`(`userid`, `courseid`, `title`) VALUES ($u, $c,'$ct')");
                if (!$query) {
                    die('UNABLE TO '.mysqli_error($conn));
                }else{
                    echo "$ct ASSIGNED SUCCESSFULLY";
                }
            }else{
                echo "All field required";
            }
           
        }
     
    }
?>