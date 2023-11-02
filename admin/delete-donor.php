<?php
    include '../include/config.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // delete donor based on the provided ID
        $sql = "DELETE FROM donor WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            header('Location: admin.php');
            exit();
        } else {
            echo "Error deleting donor: " . $conn->error;
        }
    } else {
        echo "No donor ID provided.";
    }

    $conn->close();
?>
