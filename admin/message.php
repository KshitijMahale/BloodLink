<?php
include '../include/config.php';
include 'Anav.php';
include 'Asidebar.html';
?>
<style>
    .message-container {
        display: flex;
        flex-wrap: wrap;
    }
    #message-details {
        border-right: 2px solid #000;
        padding: 1rem 2rem;
        border-bottom: 2px solid #000;
        font-size: 1.2rem;
        line-height: 2rem;
    }
</style>
<section id="main">
    <div class="box">
        <h1 id='box-heading'>Messages</h1>

        <div class="message-container">

        <?php
        $conn = mysqli_connect("localhost", "root", "", "contactus");

        if(!$conn){
            die("Database not connected due to ". mysqli_connect_error());
        }

        // Fetch and display donor messages
        $sql = "SELECT * FROM messages";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div id='message-details'>";
                echo "Name: " . $row['name'] . "<br>";
                echo "Email: " . $row['email'] . "<br>";
                echo "Message: " . $row['message'] . "<br>";
                echo "Created At: " . $row['created_at'] . "<br>";
                echo "</div>";
            }
        } else {
            echo "No messages found.";
        }

        $conn->close();
        ?>
        </div>
    </div>
</section>

