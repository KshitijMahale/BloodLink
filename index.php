<?php
    include 'include/header.php';
    include 'include/nav.html'; 
    include 'include/SignIn-Up_Form.php';
    include 'include/config.php';
?>
<style>
    #main-img {
        position: relative;
        width: 100%;
        height: auto;
        opacity: 0.9;
    }
    #heading {
        position: relative;
        margin-bottom: 23rem;
        margin-top: 2.5rem;
    }
    .heading-text {
        position: absolute;
        top: 20%;
        left: 35%;
        font-size: 2.5rem;
        text-align: center;
        color: #fff;
    }
    .heading-text p{
        margin-bottom: 3rem;
        font-style: italic;
        text-decoration: underline solid #DFACA7 2px;
        font-size: 3rem;
        font-weight: 600;
    }
    .heading-text button {
        margin-top: 2rem;
        font-size: 1.4rem;
        padding: 0.4rem 1.2rem;
        border: none;
        border-radius: 3rem;
        background-color: #b30000;
        border: 03px solid #b30000;
        color: #fff;
        transition: 500ms;
        cursor: pointer;
    }
    .heading-text button:hover {
        border: 03px solid #fff;
        background-color: transparent;
    }


    #info-card {
        background-color: #fff;
        height: 20rem;
        width: 80%;
        display: flex;
        margin: 0 10rem;
        border: none;
        border-radius: 0.5rem;
        box-shadow: 0px 0px 5rem rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 90%;
        margin: 0 9rem;
    }
    .info-cards {
        display: grid;
        font-size: 1.5rem;
        padding: 3rem;
        cursor: pointer;
    }

    .icon_box_bg {
        height: 6rem;
        grid-column: 1 /span 6;
    }
    #info-card-1:hover #icon1{
        height: 4rem;
    }
    #info-card-2:hover #icon2{
        height: 3.5rem;
    }
    .info-cards:hover #icon3{
        height: 3.5rem;
    }
    .info-cards-heading {
        text-align: center;
        grid-column: 7 /span 6;
        position: absolute;
        top: 20%;
        margin-left: 8rem;
    }
    .info-cards-text {
        grid-column: 1 /span 12;
        color: rgba(0, 0, 0, 0.5);
        font-size: 1.3rem;
        line-height: 2rem;
    }

    .icons {
        position: absolute;
        height: 3rem;
        margin-top: 0.3rem;
        margin-left: 1.5rem;
        top: 4rem;
        transition-duration: 400ms;
    }
    #icon1{
        margin-top: 0.5rem;
        height: 3.5rem;
    }



    #info_1 {
        margin: 0 8rem;
        display: grid;
    }
    #info_1 img {
        grid-column: 1 /span 6;
        border-radius: 0.5rem;
    }
    .info_1-texts {
        grid-column: 7 /span 6;
        margin-left: 7rem;
    }
    #info_1-heading {
        font-size: 3.0rem;
        color: #b30000;
        margin-bottom: 2.5rem;
    }
    #info_1-text {
        font-size: 1.5rem;
        line-height: 2rem;
        color: rgba(0, 0, 0, 0.5);
        margin-bottom: 3rem;
    }
    #info_1-points {
        font-size: 1.2rem;
        list-style-type: none;
        line-height: 1.5rem;
    }
    #point1, #point2, #point3 {
        margin-top: 1rem;
        display: flex;
    }
    .bulletPoint {
        height: 1.5rem;
        margin: 0rem 0.5rem 0 0;
    }

    #no-of-donors {
        height: 8rem;
        width: 70%;
        margin-top: 3.5rem;
        background-color: #06070A;
        border-radius: 0.5rem;
        color: #fff;
        text-align: center;
        padding-top: 1rem;
    }
    #no-of-donors b {
        font-size: 4rem;
    }
    #no-of-donors p {
        font-size: 1.5rem;
        color: #fff;
        opacity: 0.7;
    }

    #signUp-card {
        margin: 5rem  0 0 20rem;
        background-color: #ae0e28;
        color: #fff;
        display: flex;
        justify-content: space-around;
        align-items: center;
        border-radius: 0.5rem 0 0 15rem;
        padding: 1rem;
    }
    #signUp-card-text {
        font-size: 2rem;
        font-weight: 700;
        line-height: 2.5rem;
    }

    #signUp-card-subtext1 {
        color: black;
    }
    #signUp-card-subtext2 {
        margin-left: 4rem;
    }
    #signUp-btn {
        font-size: 1.5rem;
        width: 7rem;
        height: 3rem;
        border: 2px solid black;
        border-radius: 1rem;
        margin-top: 1rem;
        transition: 300ms;
    }
    #signUp-btn:hover {
        border: 2px solid white;
        background-color: black;
        color: #fff;
        cursor: pointer;
    }
</style>
    <main>
        <section id="heading">
            <img src="./imgs/img2.jpg" alt="patient and donor" id="main-img">
            <div class="heading-text">
                <p>Register yourself</p>
                We can make a difference<br>
                <button class="signUp-btn">Join as Donor</button>
            </div>
            <section id="info-card">
                <div class="info-cards" id="info-card-1">
                    <img src="./imgs/icon_box_bg-1.png" class="icon_box_bg">
                    <img src="./imgs/search.png" class="icons" id="icon1">
                    <p class="info-cards-heading">Find<br>Donor</p>
                    <p class="info-cards-text">Search BloodLink database with city and blood group. Get donor nearby.</p>
                </div>
                <div class="info-cards" id="info-card-2">
                    <img src="./imgs/icon_box_bg-3.png" class="icon_box_bg">
                    <img src="./imgs/volunteer-img.png" class="icons" id="icon2">
                    <p class="info-cards-heading">Become<br>Volunteer</p>
                    <p class="info-cards-text">Very Simple. It takes just 2 minutes to join, please do it now and be a Hero.</p>
                </div>
                <div class="info-cards" id="info-card-3">
                    <img src="./imgs/icon_box_bg-2.png" class="icon_box_bg">
                    <img src="./imgs/img3.png" class="icons" id="icon3">
                    <p class="info-cards-heading">Need<br>Blood ?</p>
                    <p class="info-cards-text">Many willful donors are registered here, surely someone will be available to help.</p>
                </div>
            </section>
        </section>
        <section id="info_1">
            <img src="./imgs/superhero.jpg">
            <div class="info_1-texts">
                <p id="info_1-heading">Give a Helping Hand</p>
                <p id="info_1-text">Every minute someone needs blood, here anyone can share his blood group with city and contact details so needy person can find the Hero.</p>
                <ul id="info_1-points">
                    <li id="point1">
                        <img src="./imgs/bulletPoint.png" alt="bullet point" class="bulletPoint">
                        It's a fortune to give life to someone in need.
                    </li>
                    <li id="point2">
                        <img src="./imgs/bulletPoint.png" alt="bullet point" class="bulletPoint">
                        Pain experienced is no more than a needle prick.
                    </li>
                    <li id="point3">
                        <img src="./imgs/bulletPoint.png" alt="bullet point" class="bulletPoint">
                        Time taken for a donation is less than an hour.
                    </li>
                </ul>
                <div id="no-of-donors">
                    <?php 
                        $query = "SELECT COUNT(*) as total_donors FROM donor";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $totalDonors = $row["total_donors"];
                            echo "<b>$totalDonors</b>";
                        } else {
                            $totalDonors = 0;
                            echo "<b>$totalDonors</b>";
                        }
                        $conn->close();
                    ?>
                    <p>Registered Donors</p>
                </div>
            </div>
        </section>
        <section id="signUp-card">
            <div id="signUp-card-text">
                <p>Help People in need</p>
                Become a Volunteer Now!
            </div>
            <button id="signUp-btn">Sign Up</button>
        </section>
    </main>

<?php
    include 'include/footer.html';
?>