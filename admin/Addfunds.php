<?php
  include 'Anav.php';
  include 'Asidebar.html';
?>
  <section id="main">
    <div class="box">
      <h1 id="box-heading">Add Donation details</h1>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          include '../include/configFunds.php'; 

          $donor_name = $_POST['fundDonor'];
          $donation_amount = $_POST['donation_amount'];
          $donation_date = $_POST['donation_date'];

          // Insert the data into the database
          $insertQuery = "INSERT INTO donation_records (fundDonor, donation_amount, donation_date) VALUES (?, ?, ?)";
          $stmt = $con->prepare($insertQuery);
          $stmt->bind_param("sds", $donor_name, $donation_amount, $donation_date);

          if ($stmt->execute()) {
              echo "<p id='success-message'>Donation added successfully!</p>";
          } else {
              echo "<p id='error-message'>Error adding donation: " . $stmt->error . "</p>";
          }

          $stmt->close();
          $con->close();
        }
      ?>

      <form action="" method="post" id="addDonationForm">
        <label for="donor_name">Fund Donor Name:</label>
        <input type="text" name="fundDonor" required><br><br>
        
        <label for="donation_amount">Donation Amount:</label>
        <input type="number" name="donation_amount" step="0.01" required><br><br>

        <label for="donation_date">Donation Date:</label>
        <input type="date" name="donation_date" required><br><br>
        
        <input type="submit" value="Add" id="donation-submit-btn">
      </form>
    </div>
  </section>
</main>