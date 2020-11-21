<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="vendor/sydeestack.js"></script>
    <script src="vendor/dashboard.js"></script>
    <!-- <script src="vendor/users.js"></script>
    <script src="vendor/signup.js"></script>
    <script src="vendor/upload.js"></script> -->
<script src="<?php 
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        echo "vendor/$page.js";
      } ?>"></script>


</body>
</html>