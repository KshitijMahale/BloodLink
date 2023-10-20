<?php
  include 'Dnav.php';
?>
    <section class="sidebar_menu">
        <div class="menu">
          <ul>
            <a href="#">
              <li class="dOptions">Profile</li>
            </a>
            <a href="#">
              <li class="dOptions">Edit details</li>
            </a>
            <a href="#">
              <li class="dOptions">Delete profile</li>
            </a>
          </ul>
        </div>
    </section>
    <section id="profile">
      <h1>User Dashboard</h1>
      
      <?php
        include '../include/config.php';

        session_start();
        $id = $_SESSION['id'];
        session_destroy();

        $sql = "SELECT * FROM donor WHERE id='$id'";
        $result = $conn->query($sql);
    
        if ($result->num_rows == 1) {
            // Sign-in successful
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $name = $row['name'];
                $age = $row['age'];
                $gender = $row['gender'];
                $bloodGrp = $row['bloodGrp'];
                $city = $row['city'];
                $phoneNumber = $row['phoneNumber'];
                $email = $row['email'];
                $password = $row['password'];
    
                echo "<p>Welcome, $name!</p>";
                echo "<p>Email: $email</p>";
                session_start();
                $_SESSION['id'] = $id;
            }
        } else {
            // Sign-in failed
            echo "Invalid credentials. Please try again.";
        }
        $conn->close();
      ?>

      <!-- <h2>Update User Details</h2>
      <form method="post" action="update_profile.php">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>
          <label for="fullname">Full Name:</label>
          <input type="text" id="fullname" name="fullname" value="<?php echo $fullname; ?>"><br><br>
          <input type="submit" value="Update Profile">
      </form> -->


    </section>
    <!-- onClick option part will be visible -->
</main>
<?php
  include 'Dfooter.html';
?>