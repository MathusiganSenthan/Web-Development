<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="styles/styles.css">
        
    </head>
    <body>
        <header>
            <nav>
                <div class><img src="images/Logo.png" alt="Logo" style="width: 500px; height: auto;"></div>
                <div class="menu">
                    <a href="index.html" class="navline">Home</a>
                    <a href="index.html"class="navline">Homes & Appartment</a>
                    <a href="index.html"class="navline">Lands</a> 
                    <a href="index.html"class="navline">Rentals</a>
                    <a href="index.html"class="navline">About Us</a>
                    <a href="index.html"class="navline">Post AdS</a>
                    <a href="index.html"><img src="images/Signin.png" alt="Login Button"  style="width: 100px; height:auto;"></a><br>
                    <a href="index.html"><img src="images/Signup.png" alt="signUP logo" style="width: 100px; height: auto;"></a>
                </div>
            </nav>
        </header>
       
        
            <!--image slider start-->
    <div class="slider">
      <h1 class="mainHeading">DISCOVER YOUR DREAM PROPERTY</h1><br>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="slides">
          <!--radio buttons start-->
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <!--radio buttons end-->

          <!--slide images start-->
          <div class="slide first">
            <img src="images/slide1.png" alt="">
          </div>
          <div class="slide">
            <img src="images/slide2.png" alt="">
          </div>
          <div class="slide">
            <img src="images/slide3.png" alt="">
          </div>
          <div class="slide">
            <img src="images/slide4.png" alt="">
          </div>
          <!--slide images end-->
          <!--automatic navigation start-->
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
          </div>
          <!--automatic navigation end-->
        </div>
        <!--manual navigation start-->
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
        <!--manual navigation end-->
      </div>
      <!--image slider end-->
  
      <script type="text/javascript">
      var counter = 1;
      setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4){
          counter = 1;
        }
      }, 5000);
      </script>
<div class="nishan">
    <button> <a href="http://localhost/src/read.php"> See All Data</a></button>
    <button> <a href="http://localhost/src/modify.php"> Modify Data</a></button>
    </div>


      <footer>
            <div class="row">
                <div class="col">
                    <img src="images/LogoF.png" alt="Footer Logo" style="width:300px; height: auto;">
                    <p>
                        Lanka PropertyPro is a comprehensive platform that connects buyers, sellers, and agents in the real 
                        estate market. With a user-friendly interface and powerful search functionality, we make it easy for users to 
                        find their dream properties or sell their homes quickly and efficiently
                    </p>
                </div>
                <div class="col">
                    <h3>Office</h3>
                    <p>Lankapropertypro Company Pvt. Ltd</p>
                    <p>New Kandy Road</p>
                    <p>Malabe</p>
                    <br>
                    <p class="email-ID">info@lankapropertypro.com</p>
                    <br>
                    <h4>+94-712345678</h4>
                </div>
                <div class="col">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="#">T&C</a></li>
                        <li><a href="#">Privecy Policy</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Subscribe</h3>
                <form >
                    <i class="fa-regular fa-envelope"></i>
                    <input type="text" placeholder="Enter your Email ID" required>
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>

                </div>

            </div>
        </footer>
    </body>
</html>


<?php
//detabase code
// Establish a connection to the HySQL database
$host = "localhost";
$username = "root";
$password = ""; 
$database = "nish";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

// Handle fore submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {


// Get form data
$email = $_POST["email"]??"";


// Save user information into the database

$sql = "INSERT INTO nish ( email ) VALUES ( '$email')";

if (mysqli_query($conn, $sql)) {
echo "email submit!";
} else {
    echo "Error: " . $sql . "<br>" .mysqli_error($conn);
}

//close the database connection
mysqli_close($conn);
}
?>