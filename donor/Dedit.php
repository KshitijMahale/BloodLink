<?php
  include 'Dnav.php';
  include 'sidebar.html';
?>
  <section id="edit">
    <div class="edit-box">
      <?php
        include 'check.php';

        $Formated_name = ucwords($name);
        echo "<h2 id='edit-heading'>Edit your details <strong>$Formated_name</strong></h2>";
      ?>

      <div id="update-message-container">
        <?php
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $age = $_POST['age'];
            $city = $_POST['city'];
            $phoneNumber = $_POST['phoneNumber'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Check if the phone number and email do not exist in the database
            $checkPhoneNumberQuery = "SELECT * FROM donor WHERE phoneNumber='$phoneNumber' AND id<>'$id'";
            $checkEmailQuery = "SELECT * FROM donor WHERE email='$email' AND id<>'$id'";

            $phoneResult = $conn->query($checkPhoneNumberQuery);
            $emailResult = $conn->query($checkEmailQuery);

            if ($phoneResult->num_rows > 0) {
              echo "<p id='updateMessage' class='error-message'>Phone number already exists in the database.</p>";
            } elseif ($emailResult->num_rows > 0) {
              echo "<p id='updateMessage' class='error-message'>Email already exists in the database.</p>";
            } else {
              // Build the SQL query for updating non-empty fields
              $updateQuery = "UPDATE donor SET ";
              if (!empty($age)) $updateQuery .= "age='$age', ";
              if ($city !== 'Select') $updateQuery .= "city='$city', ";
              if (!empty($phoneNumber)) $updateQuery .= "phoneNumber='$phoneNumber', ";
              if (!empty($email)) $updateQuery .= "email='$email', ";
              if (!empty($password)) $updateQuery .= "password='$password', ";

              // Remove the trailing comma and space from the query
              $updateQuery = rtrim($updateQuery, ', ');

              $updateQuery .= " WHERE id='$id'";

              if ($conn->query($updateQuery) === TRUE) {
                echo "<p id='updateMessage' class='success-message'>Details updated successfully.</p>";
              } else {
                echo "<p id='updateMessage' class='error-message'>Error updating details: " . $conn->error . "</p>";
              }
            }
          }
        ?>
      </div>



      <form method="post" action="" class="Update_Form">
          <label class="align-inputBox">Age <input type="number" id="age" name="age"></label>
          <label class="align-inputBox">City <select name="city" id="city">
              <option value="Select">Select</option>
              <option value="Nashik">Nashik</option>
              <option value="Pune">Pune</option>
              <option value="Mumbai">Mumbai</option>
          </select><br></label>
          <label class="align-inputBox">Mobile No. <input type="number" id="mobileNo" name="phoneNumber"></label>
          <label class="align-inputBox">Email <input type="email" id="email" name="email"><br></label>
          <label class="align-inputBox">Password <input type="password" id="password" name="password" autocomplete="current-password"><br></label>
          <button type="submit" class="update-btn">Update</button>
          <!-- <button type="reset" class="reset-btn">Reset</button> -->
      </form>
    </div>

  </section>
</main>
<?php
  include 'Dfooter.html';
?>