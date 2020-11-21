<?php 

    include 'conn.php';
    include 'functions.php';
    if (isset($_POST['searchCheck'])) {
        $term = uCheck($_POST['term']);
        $by = uCheck($_POST['by']);
        
        if (trim(strlen($term)) > 0) {
            if ($by == '*') {
                $query = mysqli_query($conn, "SELECT * FROM `signup` WHERE email LIKE  '%$term%' OR username LIKE '%$term%' OR phone LIKE '%$term%'");
             
                if (!$query) {
                    die('UNABLE TO FETCH'.mysqli_error($conn));
                    exit();
                }else if(mysqli_num_rows($query) > 0){
                    fetchUserData($query);
                }else{
                    echo "<p style='text-align: center; font-size: 25px; '>USER NOT FOUND</p>";
                }
   
            }else{
               $query =mysqli_query($conn, "SELECT * FROM `signup` WHERE $by LIKE  '%$term%'");
               if (!$query) {
                die('UNABLE TO FETCH'.mysqli_error($conn));
                exit();
            }else if(mysqli_num_rows($query) > 0){
                fetchUserData($query);
            }else{
                echo "<p style='text-align: center; font-size: 25px; '>USER NOT FOUND</p>";
            }
                  
        } 
        }
       }
    
?>
