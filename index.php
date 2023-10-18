<?php
    include 'header.php';
    include 'nav.html'; 
    include ('SignIn-Up_Form.php');
?>
    <main>
        <section id="heading">
            <img src="./imgs/img2.jpg" alt="patient and donor" id="main-img">
            <div class="heading-text">
                <p>Register yourself</p>
                We can make a difference<br>
                <!-- You Can Help us to Save Someone's Live Through Blood Donation<br> -->
                <!-- <p>Give Blood get Blessings</p> -->
                <button class="signUp-btn">Join as Donor</button>
            </div>
            <section id="info-card">
                <div class="info-cards" id="info-card-1">
                    <!-- link this part to the donor finding form -->
                    <img src="./imgs/icon_box_bg-1.png" class="icon_box_bg">
                    <img src="./imgs/search.png" class="icons" id="icon1">
                    <p class="info-cards-heading">Find<br>Donor</p>
                    <p class="info-cards-text">Search OnlineBlood database with city and blood group. Get donor nearby.</p>
                </div>
                <div class="info-cards" id="info-card-2">
                    <!-- link this part to the SignUp form -->
                    <img src="./imgs/icon_box_bg-3.png" class="icon_box_bg">
                    <img src="./imgs/volunteer-img.png" class="icons" id="icon2">
                    <p class="info-cards-heading">Become<br>Volunteer</p>
                    <p class="info-cards-text">Very Simple. It takes just 2 minutes to join, please do it now and be a Hero.</p>
                </div>
                <div class="info-cards" id="info-card-3">
                    <!-- link this part to the donor finding form 
                    Same as Find Donor section -->
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
                    <!-- link this to database, show the number of volunteers registered -->
                    <b>0</b>
                    <p>Registered Donors</p>
                </div>
            </div>
        </section>
        <!-- <section id="Donation-types">
            <p id="DT-heading">Donation Available</p>
            <div class="donation-cards">
                <div class="donation-card">
                    <img src="./imgs/blood.jpg" alt="blood">
                    <p class="donation-card-heading">Blood</p>
                    <p class="donation-card-text">Takes only 10-15 minutes and can be given again after 56 Days.</p>
                </div>
                <div class="donation-card">
                    <img src="./imgs/plasma.jpg" alt="plasma">
                    <p class="donation-card-heading">Plasma</p>
                    <p class="donation-card-text">Takes only 45 minutes and can be given again after 7 Days.</p>
                </div>
                <div class="donation-card">
                    <img src="./imgs/platelets.jpg" alt="platelets">
                    <p class="donation-card-heading">Platelets</p>
                    <p class="donation-card-text">Takes only 45 minutes and can be given again after 7 Days.</p>
                </div>
            </div>
        </section> -->
        <section id="signUp-card">
            <div id="signUp-card-text">
                <p>Help People in need</p>
                Become a Volunteer Now!
            </div>
            <button id="signUp-btn">Sign Up</button>
        </section>
    </main>

<?php
    include 'footer.html';
    // include 'config.php';
?>