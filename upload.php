
    <div class="upload-container">
      <form action="" class="form-upload" id="upload-form">
        <select name="" id="">
        <?php
          $query = mysqli_query($conn, "SELECT * FROM upload");
          if (mysqli_num_rows($query) > 0) {
                while ($row =mysqli_fetch_assoc($query)) {
                    $id = $row['id'];
                    $t = strtoupper($row['title']);
                    $ac = $row['courseid'];

                    // SELECT COURSE TITLE  
                    $courseTitle = mysqli_query($conn, "SELECT title FROM course WHERE id=$ac");
                    $cTitle = mysqli_fetch_assoc($courseTitle);
                    $cTitle = strtoupper($cTitle['title']);
                    echo "<option value='$id'>$t - $cTitle</option>";
                    }
          }else{
            echo 'NO ACCESSMENT';
          }
          ?>
        </select>

        <input type="file" name="upload-file" id="upload-file" />

        <input type="submit" value="UPLOAD" id="login" />
      </form>
    </div>
 