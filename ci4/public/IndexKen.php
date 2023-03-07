<!DOCTYPE html>
<html>
<head>
<title>not my website, kinda</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('https://wallpaperboat.com/wp-content/uploads/2020/04/blue-aesthetic-wallpaper-13.jpg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("https://wallpapercave.com/wp/wp1836699.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("https://wallpaperboat.com/wp-content/uploads/2022/05/21/81956/soft-aesthetic-06.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
</head>
<body>

  <!-- hello -->

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="profile.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="landing.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> CATS</a>
    <a href="dbrecords.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i>PEOPLE</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="profile.html">ABOUT</a>
    <a href="landing.html">CATS</a>
    <a href="dbrecords.php" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i>PEOPLE</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH Here</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Only <span class="w3-hide-small">Kim</span> Dokja</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">omniscientreadersviewpoint</h3>
  <p class="w3-center"><em>ORV not a personal account</em></p>
  <p>“I believe in you more than the future that has not come yet.”
  </p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Kim Dokja</b></p><br>
      <img src="https://static.wikia.nocookie.net/omniscient-readers-viewpoint/images/f/f1/Kim_Dokja_%28Volume_1_cover%2C_new%29.png" 
      style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" class="w3-round w3-image" alt="Guwon">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>I am the main protagonist of Omniscient Reader's Viewpoint. He is the sole reader of the webnovel Three Ways to Survive in a Ruined World, an apocalyptic fantasy story written by tls123.</p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Im sometimes good at:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>Visualizing</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">100%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Planning</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Propethizing</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">95%</div>
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">KIMCOM Nebula</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">Prominent Members</h3>
  <p class="w3-center"><em>kids.<br> these are low resolution photos</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="https://static1.personality-database.com/profile_images/06514d9d73664caca6286a36ba3a92d2.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Lee Ji Hye">
    </div>

    <div class="w3-col m3">
      <img src="https://static.wikia.nocookie.net/omniscient-readers-viewpoint/images/5/5a/Shin_Yoosung_webnovel.png" style="width:73%" onclick="onClick(this)" class="w3-hover-opacity" alt="Shin Soo Yoon">
    </div>

    <div class="w3-col m3">
      <img src="https://static.wikia.nocookie.net/omniscient-readers-viewpoint/images/7/78/Lee_Hyunsung_Webnovel.png" style="width:75%" onclick="onClick(this)" class="w3-hover-opacity" alt="Lee Hyun Sung">
    </div>

    <div class="w3-col m3">
      <img src="https://static.wikia.nocookie.net/omniscient-readers-viewpoint/images/5/5b/Lee_Gilyoung_webnovel.png" style="width:75%" onclick="onClick(this)" class="w3-hover-opacity" alt="Lee Gil Hyung">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="https://static.wikia.nocookie.net/omniscient-readers-viewpoint/images/0/08/Biyoo.jpg" style="width:70%" onclick="onClick(this)" class="w3-hover-opacity" alt="Biyoo-ah">
    </div>

    <div class="w3-col m3">
      <img src="https://static.wikia.nocookie.net/omniscient-readers-viewpoint/images/8/8e/Yoo_Sangah_webnovel.jpg" style="width:75%" onclick="onClick(this)" class="w3-hover-opacity" alt="Yoo Sang Ah">
    </div>

    <div class="w3-col m3">
      <img src="https://thicc.mywaifulist.moe/pending/waifus/RRRMlbvC5NUSEk2UMliwK2U8lu5gEEK0q2ZCnG64.jpg" style="width:90%" onclick="onClick(this)" class="w3-hover-opacity" alt="Han Soo Young">
    </div>

    <div class="w3-col m3">
      <img src="https://pbs.twimg.com/profile_images/1267902569130504193/DCtW1h0K_400x400.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Yoo Jung Hyuk">
    </div>
    <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">
      <a href="https://omniscient-readers-viewpoint.fandom.com/wiki/Omniscient_Reader%E2%80%99s_Viewpoint_Wiki">LOAD MORE</a></button>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">EDEN</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I WORK</h3>
  <p class="w3-center"><em>For my only reader</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="https://i.redd.it/se4emwg76r591.png" class="w3-image w3-round" style="width:50%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> South Korea<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: non-existent<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: floating<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      
      <?php
            $servername = "192.168.150.213";
            $username = "webprogss211";
            $password = "fancyR!ce36";
            $dbname = "webprogss211";

            //creating connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            $name = $_POST['name'];
            $email = $_POST['email'];
            $website = $_POST['website'];
            $comment = $_POST['comment'];

          $sql = "INSERT INTO kvdizon_myguests VALUES ('$name', '$email', '$website', '$comment')";
          
          if($conn->multi_query($sql) === TRUE)
          {
            echo "New people added.";
          } else {
            echo "The story cannot be completed." . $coon->error;
          }
          $sql = "SELECT name, email, website, comment FROM kvdizon_myguests";
          $result = $conn->query($sql);

          $conn->close();
      ?>

    <?php
          // define variables and set to empty values
          $nameErr = $emailErr = $genderErr = $websiteErr = "";
          $name = $email = $gender = $comment = $website = "";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = test_input($_POST["name"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
              }
            }
            
            if (empty($_POST["email"])) {
              $emailErr = "Email is required";
            } else {
              $email = test_input($_POST["email"]);
              // check if e-mail address is well-formed
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
              }
            }
              
            if (empty($_POST["website"])) {
              $website = "";
            } else {
              $website = test_input($_POST["website"]);
              // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
              if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
              }
            }

            if (empty($_POST["comment"])) {
              $comment = "";
            } else {
              $comment = test_input($_POST["comment"]);
            }

          }

          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        ?>
        
      <div class="PHPFORM" style="color:white">
      <h2 >CONTACT ME</h2>
      <p><span class="error">* required field</span></p>
      <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        <input type="submit"  name="submit" value="Submit">  
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top of the world</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.pinterest.ph/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://www.twitter.com/"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
  <p>Powered by <a href="landing.html" title="W3.CSS" target="_blank" class="w3-hover-text-green">TWSA</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>