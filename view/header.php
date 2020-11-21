<?php include 'control/functions.php';
include 'control/conn.php';

if (!isset($_SESSION['id'])) {
  header('Location: ./login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="vendor/sydee.css" />  
    <title>USERNAME: DASHBOARD</title>
  </head>