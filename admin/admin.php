<?php
  include 'Anav.php';
  include 'Asidebar.html';
?>
    <section id="main">
      <div class="box">

          <?php
            echo "<h1 id='box-heading'>Donors List</h1>";

            // SQL query to retrieve donor details
            $sql = "SELECT * FROM donor";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Blood Group</th>
                        <th>City</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["age"] . "</td>
                        <td>" . $row["gender"] . "</td>
                        <td>" . $row["bloodGrp"] . "</td>
                        <td>" . $row["city"] . "</td>
                        <td>" . $row["phoneNumber"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td><a href='edit-donor.php?id=" . $row["id"] . "'><img src='../imgs/edit.svg' alt='Edit' style='width: 2rem; height: 2rem; cursor: pointer;'></a></td>
                        <td><a href='delete-donor.php?id=" . $row["id"] . "'><img src='../imgs/delete.svg' alt='Delete' style='width: 2rem; height: 2rem; cursor: pointer;'></a></td>
                    </tr>";
                }

                echo "</table>";
            } else {
                echo "No donors found.";
            }

            // Close the database connection
            $conn->close();
            ?>

      </div>
    </section>
</main>
<?php
  include 'Afooter.php';
?>