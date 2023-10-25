<?php
    include 'include/configFunds.php'; 
    include 'include/header.php';
    include 'include/nav.html'; 
    include 'include/SignIn-Up_Form.php';

    $totalFundsQuery = "SELECT SUM(donation_amount) AS total_funds FROM donation_records";
    $totalFundsResult = $con->query($totalFundsQuery);

    $totalFunds = 0;

    if ($totalFundsResult->num_rows > 0) {
        $totalFunds = $totalFundsResult->fetch_assoc()["total_funds"];
    }

    $donorsQuery = "SELECT fundDonor, donation_amount FROM donation_records";
    $donorsResult = $con->query($donorsQuery);
?>
<style>
    main {
        margin: 7rem 15rem 0 15rem;
        font-size: 1.3rem;
        line-height: 2.4rem;
        /* min-height: 75vh; */
    }

    h1 {
        color: #b30000;
        text-align: center;
        margin-bottom: 0.5rem;
    }

    #scan-text {
        margin-top: 1rem;
        background-color: #b3000067;
        border-radius: 0.5rem;
        text-align: center;
        border-radius: 0.1rem 30rem;
    }

    main img {
        width: 20rem;
        margin: 1rem 0 0 17rem;
    }

    .donation {
        background-color: #b30000;
        border-radius: 0.6rem;
        margin: 1rem 0;
        border: 2px solid #000;
        color: #fff;
    }
    .donation p {
        font-weight: bold;
        font-size: 1.5rem;
    }
    #totFunds {
        background-color: #000;
        color: #fff;
        font-size: 1.8rem;
        text-align: center;
        border-bottom: 2px solid #fff;
        border-radius: 0.5rem 0.5rem 0 0;
        padding: 0.5rem;
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
    <main>
        <h1>Fundraising</h1>
        <div>
            <p id="F-heading">Help us save lives by donating to our Fundraising campaign</p>
            <p id="sub-heading">Your donation will help us provide blood to those in need.</p>
            <p id="body">
                This funds will be donated further to Blood banks or help a needy person.
                Your donation can save a life.<br>
            </p>
            <div id="scan-text">Scan the QR Code to donate!</div>
        </div>
        <img src="./imgs/QR.jpg">

        <div class="donation">
            <p id="totFunds">Total Funds Raised: &#8377; <?php echo number_format($totalFunds, 2); ?></p>
            <div class="donationDetails">
                <p>Donors and Contributions:</p>
                <ul>
                    <?php
                    if ($donorsResult->num_rows > 0) {
                        while ($row = $donorsResult->fetch_assoc()) {
                            $donorName = $row['fundDonor'];
                            $donationAmount = number_format($row['donation_amount'], 2);
                            // $donationDate = $row['donation_date'];
                            echo "<li>{$donorName}: &#8377; {$donationAmount}</li>";
    
                            // echo "<li>{$donorName}: &#8377; {$donationAmount} (Donation Date: {$donationDate})</li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>

    </main>
<?php
    include 'include/footer.html';
?>