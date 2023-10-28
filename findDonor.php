<?php
    include 'include/header.php';
    include 'include/nav.html'; 
    include 'include/SignIn-Up_Form.php';
?>
<style>
    #findDonor {
        margin: 7.5rem 10% 5rem ;
        text-align: center;
    }
    #search {
        display: flex;
        justify-content: center;
        align-items: baseline;
    }
    #select-city, #select-b_Grp {
        font-size: 1.5rem;
        margin-right: 0.5rem;
    }

    #fd_city, #fd_bGrp {
        margin-bottom: 1.5rem;
        border-radius: 0.5rem;
        padding: 0.2rem;
        font-size: 1.2rem;
        margin-right: 2rem;
    }
    #submit-btn, #reset-btn {
        padding: 0.3rem;
        font-size: 1.1rem;
        background-color: #fff;
        border: 2px solid black;
        border-radius: 0.3rem;
        margin-right: 0.5rem;
    }
    #submit-btn:hover, #reset-btn:hover {
        background-color: black;
        color: #fff;
    }

    hr {
        margin-top: 2rem;
    }

    #donors-List {
        min-height: 20.5rem;
        margin: 0 8rem 1.5rem 8rem;
        /* border-bottom: 2px solid rgba(128, 128, 128, 0.454); */
    }

    /* For list of donors */
    table {
        border-collapse: collapse;
        border: 2px solid #000;
        width: 70%;
        margin: 0 auto;
    }
    caption {
        font-size: 1.8rem;
        font-weight: bold;
        color: #fff;
        background-color: #b30000;
        padding: 0.2rem;
        border-radius: 1rem 1rem 0 0;
        border: 2px solid #000;
    }
    th, td {
        border: 0.1px solid #000;
        padding: 0.8rem;
        text-align: center;
        border-bottom: 2px solid #000;
    }
    th {
        background-color: darkgrey;
        font-size: 1.5rem;
        color: #000;
    }
    td {
        font-size: 1.3rem;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:nth-child(odd) {
        background-color: #ffffff;
    }
    
</style>
    <!-- 7 Sept -->
    <form method="post" action="findDonor.php" id="findDonor">
        <section id="search">
            <p id="select-city">Select the City: </p>
            <select name="city" id="fd_city">
                <option value="Select">Select</option>
                <option value="Agra">Agra</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Nashik">Nashik</option>
                <option value="Pune">Pune</option>
            </select>
            <p id="select-b_Grp">Select Blood group: </p>
            <select name="b_Grp" id="fd_bGrp">
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select><br>
        </section>
        <section id="btns">
            <button type="submit" id="submit-btn" name="search">Search</button>
            <button type="reset" id="reset-btn">Reset</button>
        </section>
        <hr>
    </form>
    <section id="donors-List" style="visibility: <?php echo $donorsListVisibility; ?>;">
        <?php
        include 'include/config.php';
        
        $donorsListVisibility = 'hidden';

        if (isset($_POST['search'])) {
            if ($_POST['city'] == "Select") {
                // echo "<script>alert('Please select a city.');</script>";
                echo "<h2>Please select a city.</h2>";
            }
            elseif (isset($_POST['b_Grp']) && isset($_POST['city'])) {
                    
                $bloodGrp = $_POST['b_Grp'];
                $city = $_POST['city'];

                $sql = "SELECT * FROM donor WHERE bloodGrp = '$bloodGrp' AND city = '$city'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    $donorsListVisibility = 'visible';
                    $num = 1;
                    // echo "<h1>Donors found with the specified criteria: </h1>";
                    echo "<table border='1' class='table'>
                            <caption>Donors</caption>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Phone No.</th>
                                <th>Email</th>
                            </tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $num++ . "</td>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["age"] . "</td>
                                <td>" . $row["phoneNumber"] . "</td>
                                <td>" . $row["email"] . "</td>
                            </tr>";
                    }
                    echo "</table>";
                } else {
                    $donorsListVisibility = 'hidden';
                    echo "<h2>Sorry! No donors found with the specified criteria.</h2>";
                }

                $conn->close();
            }
            }
        ?>
    </section>
<?php
    include 'include/footer.html';
?>