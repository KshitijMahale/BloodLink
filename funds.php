<?php
    include 'include/header.php';
    include 'include/nav.html'; 
    include 'include/SignIn-Up_Form.php';
?>
<style>
    main {
        margin: 6rem 15rem 0 15rem;
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

    /* #greeting {
        font-size: 2rem;
        text-decoration: underline wavy grey 2px;
        font-weight: 700;
    } */
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
        <!-- <div id="greeting">Thank You!</div> -->
    </main>
<?php
    include 'include/footer.html';
?>