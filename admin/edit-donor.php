<?php
    include '../include/config.php';
    include 'Anav.php';
    include 'Asidebar.html';
?>

<section id="main">
    <div class="box">
        <?php

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            
                $sql = "SELECT * FROM donor WHERE id = $id";
                $result = $conn->query($sql);
            
                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    // Extract donor details
                    $name = $row['name'];
                    $age = $row['age'];
                    $gender = $row['gender'];
                    $bloodGrp = $row['bloodGrp'];
                    $city = $row['city'];
                    $phoneNumber = $row['phoneNumber'];
                    $email = $row['email'];
            
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $new_id = $_POST['id'];
                        $new_name = $_POST['name'];
                        $new_age = $_POST['age'];
                        $new_gender = $_POST['gender'];
                        $new_bloodGrp = $_POST['b_Grp'];
                        $new_city = $_POST['city'];
                        $new_phoneNumber = $_POST['phoneNumber'];
                        $new_email = $_POST['email'];
            
                        $update_query = "UPDATE donor SET `name` = '$new_name', `age` = '$new_age', `gender` = '$new_gender', `bloodGrp` = '$new_bloodGrp', `city` = '$new_city', `phoneNumber` = '$new_phoneNumber', `email` = '$new_email' WHERE id = '$new_id'";
            
                        if ($conn->query($update_query) === TRUE) {
                            // Redirect to admin.php after updating
                            header('Location: admin.php');
                            exit();
                        } else {
                            echo "Error updating donor details: " . $conn->error;
                        }
                    }
            
                    // Display a form to edit donor details
                    echo "<h1 id='box-heading'>$name's Details</h1>
                        <form method='post' action='' id='editForm'>
                            <input type='hidden' name='id' value='$id'>
                            <label for='name'>Name:
                            <input type='text' id='name' name='name' value='$name'></label>
                            <label for='age'>Age:
                            <input type='number' id='age' name='age' value='$age'></label>
                            <label for='gender' class='align-inputBox'>Gender
                                <select name='gender' id='gender' required>
                                    <option value='Male'" . ($gender == 'Male' ? ' selected' : '') . ">Male</option>
                                    <option value='Female'" . ($gender == 'Female' ? ' selected' : '') . ">Female</option>
                                </select>
                            </label>
                            <label for='b_Grp' class='align-inputBox'>Blood Type
                                <select name='b_Grp' id='b_Grp' required>
                                    <option value='O+'" . ($bloodGrp == 'O+' ? ' selected' : '') . ">O+</option>
                                    <option value='O-'" . ($bloodGrp == 'O-' ? ' selected' : '') . ">O-</option>
                                    <option value='A+'" . ($bloodGrp == 'A+' ? ' selected' : '') . ">A+</option>
                                    <option value='A-'" . ($bloodGrp == 'A-' ? ' selected' : '') . ">A-</option>
                                    <option value='B+'" . ($bloodGrp == 'B+' ? ' selected' : '') . ">B+</option>
                                    <option value='B-'" . ($bloodGrp == 'B-' ? ' selected' : '') . ">B-</option>
                                    <option value='AB+'" . ($bloodGrp == 'AB+' ? ' selected' : '') . ">AB+</option>
                                    <option value='AB-'" . ($bloodGrp == 'AB-' ? ' selected' : '') . ">AB-</option>
                                </select>
                            </label>
                            <label for='city'>City:
                            <select name='city' id='city' value='$city'>
                                <option value='Select'>Select</option>
                                <option value='Agra'" . ($city == 'Agra' ? ' selected' : '') . ">Agra</option>
                                <option value='Ahemdabad'" . ($city == 'Ahemdabad' ? ' selected' : '') . ">Ahemdabad</option>
                                <option value='Bangalore'" . ($city == 'Bangalore' ? ' selected' : '') . ">Bangalore</option>
                                <option value='Chennai'" . ($city == 'Chennai' ? ' selected' : '') . ">Chennai</option>
                                <option value='Delhi'" . ($city == 'Delhi' ? ' selected' : '') . ">Delhi</option>
                                <option value='Hyderabad'" . ($city == 'Hyderabad' ? ' selected' : '') . ">Hyderabad</option>
                                <option value='Jaipur'" . ($city == 'Jaipur' ? ' selected' : '') . ">Jaipur</option>
                                <option value='Kolkata'" . ($city == 'Kolkata' ? ' selected' : '') . ">Kolkata</option>
                                <option value='Nashik'" . ($city == 'Nashik' ? ' selected' : '') . ">Nashik</option>
                                <option value='Pune'" . ($city == 'Pune' ? ' selected' : '') . ">Pune</option>
                                <option value='Mumbai'" . ($city == 'Mumbai' ? ' selected' : '') . ">Mumbai</option>
                            </select></label>
                            <label for='phoneNumber'>Phone Number:
                            <input type='text' id='phoneNumber' name='phoneNumber' value='$phoneNumber'></label>
                            <label for='email'>Email:
                            <input type='email' id='email' name='email' value='$email'></label>
                            <button type='submit' value='Update Donor'>Update Donor</button>
                        </form>";
                } else {
                    echo "Donor with ID $id not found.";
                }
            }
            $conn->close();
        ?>
    </div>
</section>

