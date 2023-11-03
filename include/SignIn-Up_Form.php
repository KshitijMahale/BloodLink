<!--SignIn Form-->
<section class="signIn_Form_section">
    <div class="close-btn">&times;</div>
    <h2>Sign In</h2>
    <form method="post" action="db/afterSignIn.php" class="signIn_Form"> <!--action="javascript:void(0)"-->
        Email<input type="email" id="email" name="email" placeholder="e.g. ravikumar14@gmail.com"><br>
        Password<input type="password" id="password" name="password" placeholder="e.g. raVi99"><br>
        <button class="signIn-btn" id="signIn_Form_btn">Sign In</button><br>
    </form>
</section>

<!--SignUp Form-->
<section class="signUp_Form_section">

    <div class="close-btn">&times;</div>
    <h2>Sign Up</h2>
    <form method="post" action="db/data-insertion.php" class="signUp_Form" id="donorForm"> <!--action="target"-->
        <label class="align-inputBox">Name <input type="text" id="name" name="name" placeholder="Ravi Kumar" required><br></label>
        <label class="align-inputBox">Age <input type="number" id="age" name="age" placeholder="26" required><br></label>
        <label class="align-inputBox">Gender <select name="gender" id="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br></label>
        <label class="align-inputBox">Blood type <select name="b_Grp" id="b_Grp" required>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select><br></label>
        <label class="align-inputBox">City <select name="city" id="city" required>
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
        </select><br></label>
        <label class="align-inputBox">Mobile No. <input type="number" id="mobileNo" name="mobileNo" placeholder="9633529635" required><br></label>
        <label class="align-inputBox">Email <input type="email" id="email" name="email" placeholder="ravikumar14@gmail.com" required><br></label>
        <label class="align-inputBox">Password <input type="password" id="password" name="password" placeholder="raVi99" required><br></label>
        <input type="checkbox" name="privacyPolicy" value="1" class="privacyPolicy" checked  style="width: 3%;" required><span>I have read and understood the <a href="./privacyPolicy.php" id="privacyPolicy_link">privacy policy</a></span><br>
        <button type="submit" class="signIn-btn" id="signUp_Form_btn">Sign Up</button>
        <button type="reset" class="reset-btn">Reset</button>
    </form>
</section>

