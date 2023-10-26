<?php
  include 'Dnav.php';
  include 'sidebar.html';
?>
    <section id="profile">
      <!-- <h1>User Dashboard</h1> -->
      <div class="box">

        <?php
          include 'check.php';

          $Formated_name = ucwords($name);
  
          echo "<h1 id='box-heading'>Welcome, <strong>$Formated_name</strong>!</h1>";
          echo "<div id='box-content'>";
          if ($result->num_rows == 1) {
              echo "<table border='1'>
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Age</th>
                          <th>Blood Group</th>
                          <th>City</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Password</th>
                      </tr>";
              echo "<tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$age</td>
                        <td>$bloodGrp</td>
                        <td>$city</td>
                        <td>$phoneNumber</td>
                        <td>$email</td>
                        <td>$password</td>
                    </tr>";
              echo "</table>";
          }
          echo "</div>";
        ?>
      <div id='box-footer'>Thank you for being a part of our Donor Community!</div>
      </div>
    </section>
</main>