<?php
  include 'Dnav.php';
  include 'sidebar.html';
?>
    <section id="profile">
      <!-- <h1>User Dashboard</h1> -->
      
      <?php
        include 'check.php';
        session_start();
        $_SESSION['id'] = $id;

        echo "<h1>Welcome, <strong>$name</strong>!</h1>";

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
      ?>
    </section>
    <!-- onClick option part will be visible -->
</main>
<?php
  include 'Dfooter.html';
?>