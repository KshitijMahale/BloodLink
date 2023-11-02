<?php
  include 'Dnav.php';
  include 'sidebar.html';
?>
    <section id="delete">
      <!-- <h1>User Dashboard</h1> -->
      <div class="Dbox">

        <?php
          include 'check.php';
          
          $Formated_name = ucwords($name);
          echo "<h1 id='box-heading'>Are you sure <strong>$Formated_name</strong>?</h1>";

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $deleteQuery = "DELETE FROM donor WHERE id='$id'";
                if ($conn->query($deleteQuery) === TRUE) {
                    session_destroy();
                    header('Location: ../index.php');
                    exit();
                } else {
                    $error_message = "Error deleting the account: " . $conn->error;
                    echo "<p style='color: red;'>$error_message</p>";
                }
            }

        ?>
            <form method="post" action="" id="deleteAcc_Form">
                <p>Do you want to delete your account?</p>
                <button type="submit"name="delete" value="Delete My Account">Yes, Delete my account.</button>
            </form>
      </div>
    </section>
</main>