<?php
    include 'Dnav.php'; 
    include 'check.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Save the message to the database (assuming you have a database connection)
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "contactus";

    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<style>
    #contactusForm {
        max-width: 25rem;
        margin: 10rem auto;
        margin-bottom: 3.5rem;
        padding: 1.5rem;
        border: 1px solid #ccc;
        background-color: #f7f7f7;
    }

    #contactusForm h1 {
        text-align: center;
        margin: 0;
        margin-bottom: 1rem;
        font-size: 2.2rem;
        text-decoration: underline solid #b30000 2px;
    }

    label, input, textarea {
        display: block;
        margin-bottom: 0.8rem;
        width: 100%;
        font-size: 1.1rem;
    }
    label {
        font-size: 1.5rem;
    }
    textarea {
        height: 5rem;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        padding: 0.4rem;
        border: 1px solid #ccc;
        border-radius: 0.5rem;
    }

    input[type="submit"] {
        background-color: #b30000;
        color: #fff;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #700000;
    }

</style>

<form method="POST" action="" id="contactusForm">
        <h1>Contact Us</h1>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" placeholder="Give your feedback and/or send your query." required></textarea><br>

        <input type="submit" value="Submit">
    </form>

<?php
    include 'Dfooter.html';
?>