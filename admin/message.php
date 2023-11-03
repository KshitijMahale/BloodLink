<?php
    include '../include/config.php';
    include 'Anav.php';
    include 'Asidebar.html';
?>
<style>
    body {
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        font-size: 2rem;
    }

    .message-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(18rem, 1fr));
        gap: 1.2rem;
        margin: 1.2rem;
    }

    #message-details {
        width: 18rem;
        border: 0.1rem solid #fff;
        padding: 1.2rem;
        padding-top: 0.2rem;
        border-radius: 0.5rem;
        box-shadow: 0 0.1rem 0.3rem rgba(0, 0, 0, 0.15);
        font-size: 1.2rem;
        line-height: 2rem;
    }
    #message-details:hover {
        width: 18rem;
        box-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.3);
    }
    #message-details img {
        display: inline;
        height: 1rem;
        position: relative;
        left: 17.5rem;
        cursor: pointer;
        opacity: 0.3;
    }
    #message-details img:hover {
        opacity: 1;
    }

    .box {
        margin: 8rem 2rem 2rem 14.5rem;
        width: 80%;
        background-color: #fff;
        border-radius: 0.5rem;
        box-shadow: 0 0.25rem 0.375rem rgba(0, 0, 0, 0.1);
    }

    #box-heading {
        font-size: 2rem;
        color: #000;
        padding-left: 2rem;
        margin-bottom: 1.2rem;
    }

    .Donor-detail-headings {
        color: #b30000;
        display: inline;
        font-size: 1.2rem;
        font-weight: bold;
    }
</style>
<section id="main">
    <div class="box">
        <h1 id='box-heading'>Messages</h1>
        <div class="message-container">
        <?php
            include 'config_message.php';
            // Fetch and display donor messages
            $sql = "SELECT * FROM messages";
            $result = $c->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div id='message-details'>";
                    echo "<a href='delete-message.php?id=" . $row["id"] . "'><img src='../imgs/trash-solid.svg' id='close-btn'></a><br>";
                    echo "<p class='Donor-detail-headings'>Name: </p>" . $row['name'] . "<br>";
                    echo "<p class='Donor-detail-headings'>Email: </p>" . $row['email'] . "<br>";
                    echo "<p class='Donor-detail-headings'>Message: </p>" . $row['message'] . "<br>";
                    echo "<p class='Donor-detail-headings'>Received on: </p>" . $row['created_at'] . "<br>";
                    echo "</div>";
                }
            } else {
                echo "No messages found.";
            }
            $c->close();
        ?>
        </div>
    </div>
</section>

