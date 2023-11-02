<?php
    include 'config_message.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // delete donor based on the provided ID
        $sql = "DELETE FROM messages WHERE id = $id";
        if ($c->query($sql) === TRUE) {
            header('Location: message.php');
            exit();
        } else {
            echo "Error deleting donor: " . $c->error;
        }
    } else {
        echo "No donor ID provided.";
    }

    $c->close();
?>
