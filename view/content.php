<?php 
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'class':
                    include 'class.php';
                    break;
                case 'posts':
                    include 'posts.php';
                    break;
                case 'upload':
                    include 'upload.php';
                    break;
                case 'accessment':
                    include 'accessment.php';
                    break;
                case 'users':
                    include 'users.php';
                    break;
                case 'settings':
                    include 'settings.php';
                    break;
                case 'courses':
                    include 'courses.php';
                    break;
                case 'logout':
                        include 'logout.php';
                        break;
                
                default:
                    include 'users.php';
                    break;
            }
        }else{
            include 'users.php';
        }
?>