<?php
    include 'include/header.php';
    include 'include/nav.html'; 
    include 'include/SignIn-Up_Form.php';
?>
<style>
  body {
      background-color: lightgrey;
      margin: 0;
      padding: 0;
  }
  #bg-img {
      position: absolute;
      top: 6%;
      width: 100%;
      z-index: -1;
      opacity: 0.8;
  }
  main {
      margin: 21rem 13rem 0.5rem 13rem;
      font-size: 1.3rem;
      line-height: 2.1rem;
  }

  h2{
      color: #fff;
      margin-bottom: 4rem;
      text-align: center;
      font-size: 2.5rem;
  }
  h3 {
      margin: 1.5rem 0 0.2rem 0;
      color: #b3000093;
      text-decoration: underline solid #b30000 2px;
  }

  p {
      text-indent: 2rem;
  }
</style>
<img src="./imgs/img5.jpg" id="bg-img">
    <main>
        <h2>About BloodLink</h2>

        <p>BloodLink is a blood donor finder website that makes it easy for people to find and connect with blood donors in their area. We believe that everyone deserves access to safe and reliable blood transfusions, and we are committed to making it easier for people to find the blood they need.
        Our website is easy to use and navigate, and it allows users to search for blood donors by blood type and location.
        BloodLink is a free service for both blood donors and patients who need blood transfusions. We are committed to providing a safe and secure platform for people to connect with each other.</p>

        <h3>Why donate blood?</h3>
        <p>Blood donation is one of the most important things you can do to help others. Every day, thousands of people need blood transfusions to survive. By donating blood, you can help save lives.</p>

        <h3>How to donate blood</h3>
        <p>Donating blood is a simple and safe process. To be eligible to donate blood, you must be at least 18 years old, weigh at least 110 pounds, and be in good health.</p>
        <p>To donate blood, you can visit a local blood donation center or mobile blood drive. The donation process typically takes about an hour.</p>

        <h3>How to find a blood donor</h3>
        <p>To find a blood donor, you can visit the BloodLink website and search for donors by blood type, location, and other criteria. Once you have found a donor, you can contact them directly to arrange a blood donation.</p>

        <h3>Thank you for your support!</h3>
        <p>BloodLink is grateful for the support of our blood donors and patients. Your generosity and compassion help us to save lives.</p>

        <h3>BloodLink in the community</h3>
        <p>BloodLink is committed to giving back to the community. We support a variety of blood donation initiatives and organizations. We also offer educational resources about blood donation and the importance of blood transfusions.</p>

        <h3>BloodLink's mission</h3>
        <p>BloodLink's mission is to make it easy for people to find and connect with blood donors in their area. We believe that everyone deserves access to safe and reliable blood transfusions, and we are committed to making it easier for people to find the blood they need.</p><hr>
    </main>
<section id="contactUs">
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
    
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "contactus";
    
        $conn = new mysqli($hostname, $username, $password, $database);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
    
        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    ?>
    
    <style>
        #contactusForm {
            max-width: 25rem;
            margin: 5rem auto;
            margin-bottom: 3.5rem;
            padding: 1.5rem;
            border: 1px solid #ccc;
            background-color: #f7f7f7;
            box-shadow: 0 0.3rem 0.6rem rgba(0, 0, 0, 0.2);
        }
        
        #contactusForm h1 {
            text-align: center;
            margin: 0;
            margin-bottom: 1rem;
            font-size: 2.2rem;
            text-decoration: underline solid #b30000 2px;
        }

        label, input, textarea {
            display: block;
            margin-bottom: 0.8rem;
            width: 100%;
            font-size: 1.1rem;
        }
        label {
            font-size: 1.5rem;
        }
        textarea {
            height: 5rem;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            padding: 0.4rem;
            border: 1px solid #ccc;
            border-radius: 0.5rem;
        }

        input[type="submit"] {
            background-color: #b30000;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #700000;
        }
    </style>        
        <form method="POST" action="" id="contactusForm">
            <h1>Contact Us</h1>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="message">Message:</label>
            <textarea name="message" id="message" placeholder="Give your feedback and/or send your query." required></textarea><br>

            <input type="submit" value="Submit">
        </form>
</section>        
<?php
    include 'include/footer.html';
?>