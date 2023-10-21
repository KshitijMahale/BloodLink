      <!-- <h2>Update User Details</h2>
      <form method="post" action="update_profile.php">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>
          <label for="fullname">Full Name:</label>
          <input type="text" id="fullname" name="fullname" value="<?php echo $fullname; ?>"><br><br>
          <input type="submit" value="Update Profile">
      </form> -->
      <?php
  include 'Dnav.php';
  include 'sidebar.html';
?>
    <section id="edit">
      
      <?php
        include 'check.php';
        session_start();
        $_SESSION['id'] = $id;

        echo "<h1>Welcome, <strong>$name</strong>!</h1>";
      ?>
    <form method="post" action="db/data-insertion.php" class="signUp_Form">
        <label class="align-inputBox">Age <input type="number" id="age" name="age"><br></label>
        <label class="align-inputBox">City <select name="city" id="city">
            <option value="Select">Select</option>
            <option value="Nashik">Nashik</option>
            <option value="Pune">Pune</option>
            <option value="Mumbai">Mumbai</option>
        </select><br></label>
        <label class="align-inputBox">Mobile No. <input type="number" id="mobileNo" name="mobileNo"><br></label>
        <label class="align-inputBox">Email <input type="email" id="email" name="email"><br></label>
        <label class="align-inputBox">Password <input type="password" id="password" name="password"><br></label>
        <button type="submit" class="update-btn">Update</button>
        <button type="reset" class="reset-btn">Reset</button>
    </form>

    </section>
</main>
<?php
  include 'Dfooter.html';
?>