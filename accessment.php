<div class="accessment-container">
  
  <form method ="post" class="form-upload" id="upload-form">
    <select name="user" id="user">
      <?php
          $query = mysqli_query($conn, "SELECT * FROM signup");
          if (mysqli_num_rows($query) > 0) {
                while ($row =mysqli_fetch_assoc($query)) {
                    $id = $row['userid'];
                    $u = strtoupper($row['username']);
                    echo "<option value='$id'>$u</option>";
                    }
          }else{
            echo 'NO USER';
          }
      
      ?>
    </select>

    <select name="course" id="course">
    <?php
      
      $query = mysqli_query($conn, "SELECT * FROM course");
      if (mysqli_num_rows($query) > 0) {
            while ($row =mysqli_fetch_assoc($query)) {
                $id = $row['id'];
                $t = strtoupper($row['title']);
                echo "<option value='$id'>$t</option>";
                }
      }else{
        echo 'NO COURSES';
      }
     
      ?>
    </select>
    <input type="text" placeholder="TITLE" id="title"/>
      <span id="aError"></span>
    <input type="submit" value="ASSIGN" id="upload" />
  </form>
</div>