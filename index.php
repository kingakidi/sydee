<?php include './view/header.php'; ?>
  <body id="body">
    <div class="dashboard">
      
      <!-- BEGINING OF SIDE BAR -->
    <?php include 'view/sidebar.php' ?>

      <!-- END OF SIDE BAR  -->
      <div class="main" id="main">
        <div class="navbar">
          <?php include 'view/navbar.php'; ?>
        </div>
        <div class="content">
          <?php include 'view/content.php'?>
        </div>
      </div>
    </div>
    <?php include 'view/footer.php'; ?>