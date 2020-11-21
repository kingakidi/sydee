<div class="courses-container">
  <form action="" class="form-courses" id="course-form">
      <input type="text" placeholder="COURSE TITLE" id='courseTitle' />
      <span id="course-error" > </span>
      <input type="submit" value="ADD COURSE" id="course" />
  </form>
  <div class="course-list" id="course-list">
      <!-- LIST COURSES HERE -->

      <?php
      
      $query = mysqli_query($conn, "SELECT * FROM course");
      if (mysqli_num_rows($query) > 0) {
        echo "
        <table>
            <thead>
            <th>S/N</th>
            <th>TITLE</th>
            <th>ACTION</th>
            </thead>
            <tbody>";
            $sn = 0;
            while ($row =mysqli_fetch_assoc($query)) {
                $sn++;
                $id = $row['id'];
                $t = strtoupper($row['title']);
                
                echo "                
                <tr>
                    <td>$sn</td>
                    
                    <td>$t</td>
                    
                    <td><a href='?userid=$id'>action</a> </td>
                </tr>";
                }
                echo " </tbody>
                </table>";
      }else{
        echo 'NO COURSES';
      }
      
      ?>
  </div>
</div>