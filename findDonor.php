<?php
    include 'include/header.php';
    include 'include/nav.html'; 
    include 'include/SignIn-Up_Form.php';
?>
<style>
    #findDonor {
    margin: 7rem 10% 5rem ;
    text-align: center;
    }
    #search {
        display: flex;
        justify-content: center;
        align-items: baseline;
    }
    #select-city, #select-b_Grp {
        font-size: 1.3rem;
        margin-right: 0.5rem;
    }

    #fd_city, #fd_bGrp {
        margin-bottom: 1.5rem;
        border-radius: 0.3rem;
        padding: 0.2rem;
        font-size: 1.1rem;
        margin-right: 2rem;
    }
    #submit-btn, #reset-btn {
        padding: 0.3rem;
        font-size: 1rem;
        background-color: #fff;
        border: 2px solid black;
        border-radius: 0.3rem;
        margin-right: 0.5rem;
    }
    #submit-btn:hover, #reset-btn:hover {
        background-color: black;
        color: #fff;
    }


    #donors-List {
        background-color: aquamarine;
        min-height: 30rem;
        margin: 0 8rem 2rem 8rem;
        border-bottom: 2px solid rgba(128, 128, 128, 0.454);
    }
</style>
    <!--7 Sept-->
    <form method="post" id="findDonor">
        <section id="search">
            <p id="select-city">Select the City: </p>
            <select name="city" id="fd_city">
                <option value="Select">Select</option>
                <option value="Nashik">Nashik</option>
                <option value="Pune">Pune</option>
                <option value="Mumbai">Mumbai</option>
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
            <button type="submit" id="submit-btn" disabled>Search</button>
            <button type="reset" id="reset-btn">Reset</button>
        </section>
    </form>
    <section id="donors-List">
        <!--display the donors with same city and bloodGroup in this section-->
        <h1>List of donors</h1>
    </section>
<?php
    include 'include/footer.html';
?>