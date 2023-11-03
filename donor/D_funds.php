<?php
    include '../include/configFunds.php'; 
    include 'Dnav.php'; 
    include 'check.php';

    $totalFundsQuery = "SELECT SUM(donation_amount) AS total_funds FROM donation_records";
    $totalFundsResult = $con->query($totalFundsQuery);

    $totalFunds = 0;

    if ($totalFundsResult->num_rows > 0) {
        $totalFunds = $totalFundsResult->fetch_assoc()["total_funds"];
    }

    $donorsQuery = "SELECT fundDonor, donation_amount, donation_date FROM donation_records";
    $donorsResult = $con->query($donorsQuery);
?>
<style>
    #funds-content {
        margin: 7rem 15rem 0 15rem;
        font-size: 1.3rem;
        line-height: 2.4rem;
    }

    #fund-heading {
        color: #b30000;
        text-align: center;
        margin-bottom: 0.5rem;
    }

    #scan-text {
        margin-top: 1rem;
        background-color: #b3000067;
        text-align: center;
        border-radius: 0.1rem 30rem;
    }

    #QR {
        width: 20rem;
        margin: 1rem 0 0 17rem;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        height: auto;
        border: none;
    }
    tr {
        width: 100%;
    }

    th, td {
        border: none;
        padding: 0.5rem 0.8rem;
        text-align: left;
    }

    th {
        background-color: #b30000;
        font-size: 1.4rem;
        color: #fff;
        border: none;
    }

    td {
        font-size: 1.2rem;
        padding-left: 1rem;
    }

    tr:nth-child(even) {
        background-color: rgba(179, 0, 0, 0.1);
    }

    tr:nth-child(odd) {
        background-color: #ffffff;
    }
    #totFunds, #amt {
        background-color: #fff;
        border-top: 2px solid #000;
        font-weight: bold;
    }

    .donationDetails {
        padding: 1rem;
    }
    .donation ul {
        list-style: none;
    }

    .donation li {
        margin: 10px 0;
        font-size: 1.2rem;
    }
</style>
    <main id="funds-content">
        <h1 id="fund-heading">Fundraising</h1>
        <div>
            <p id="F-heading">Help us save lives by donating to our Fundraising campaign</p>
            <p id="sub-heading">Your donation will help us provide blood to those in need.</p>
            <p id="body">
                This funds will be donated further to Blood banks or help a needy person.
                Your donation can save a life.<br>
            </p>
            <div id="scan-text">Scan the QR Code to donate!</div>
        </div>
        <img src="../imgs/QR.jpg" alt="QR Code" id="QR">

        <div class="donation">
            <div class="donationDetails">
                <ul>
                <?php
                        if ($donorsResult->num_rows > 0) {
                            echo "<table border='1'>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount (&#8377)</th>
                                    <th>Date</th>
                                </tr>";
                            while ($row = $donorsResult->fetch_assoc()) {
                                $donorName = $row['fundDonor'];
                                $donationAmount = number_format($row['donation_amount'], 2);
                                $date = $row["donation_date"];
                                $formattedDate = date('d-m-Y', strtotime($date));
                                echo "<tr>
                                    <td>$donorName</td>
                                    <td class='amount'>$donationAmount</td>
                                    <td>$formattedDate</td>
                                </tr>";
                            }
                            echo "<tr id='totFunds'>
                                <td>Total funds Raised:</td>
                                <td id='amt'>" . number_format($totalFunds, 2) . "</td>
                                </tr>";
                            echo "</table>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </main>
<?php
    include 'Dfooter.html';
?>