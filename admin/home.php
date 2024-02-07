<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Futsal Club Information System (FCIS)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photos/logo.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>FCIS</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>HOME</a> 
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT FUTSAL CLUB</a> 
  <a href="#commitee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
  <a href="#memberships" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIPS</a>
<a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a>  
    <a href="#achievement" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  <a href="admin/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADMINISTRATOR</a> 
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="home">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Welcome to Futsal  Club</b></h1>
   

  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="photos/logo2.jpg" alt="Me" style="width:100%"></p>
    </div>
    

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>Futsal  Club</b></h4>
    <p>Welcome to the UiTMCK Futsal Club, a dynamic community where passion for futsal meets skill development and team spirit. Our club, founded with the mission of promoting a healthy and active lifestyle among students, has evolved into a vibrant hub of futsal enthusiasts. Our mission is to create a supportive community for futsal enthusiasts, providing opportunities for skill development, teamwork, and friendly competition. What sets us apart is our passionate community, dedication to skill development, and belief in the power of teamwork. Throughout the academic year, we organize various activities and events, including inter-club competitions and community outreach initiatives. Whether you're a seasoned player or a beginner, the UiTMCK Futsal Club welcomes you to join our family, experience the thrill of the game, and create lasting memories both on and off the futsal court.</p>
    <hr>

    <!-- Committee Section -->
<div class="w3-container w3-padding-64 w3-center" id="commitee">
<h2>OUR TEAM</h2>
<p>Meet the team </p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="photos/4.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Zulhakimi</h3>
  <p>President Club</p>
</div>

<div class="w3-quarter">
  <img src="photos/1.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Haziq</h3>
  <p>Vice President</p>
</div>

<div class="w3-quarter">
  <img src="photos/3.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Bahrum</h3>
  <p>Player</p>
</div>

<div class="w3-quarter">
  <img src="photos/2.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Mahadir</h3>
  <p>Captain</p>
</div>

</div>
</div>
<hr>

 <!-- Memberships Section -->
     <h4><b>Futsal Club Memberships</b></h4> 
     
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

    <!-- Memberships Section -->
  <p id="memberships" align="center"><h3>Memberships form for Futsal Club Information System</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
              <a href="edit_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

    </p>
    <hr>
    
    <!-- Activity Section -->
  <div id="activity" class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3>Activities form for Futsal Club Information System</h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM activity";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
            <td>
              <a href="edit_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_activity.php?activity_id=<?php echo $row["activity_id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
  </div>
    <hr>
  
   <!-- Achievement Session-->
   <p align="center"><h3>Achievement for Futsal Club Information System</h3></p>
  <div id="achievement" class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photos/5.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Friendly match with biggest club</b></p>
        <p>We have some friendly match with biggest club in Malaysia such as Selangor Mac</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="photos/8.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Champions in some tournament</b></p>
        <p>We have won some tournament in Kelantan and outside of Kelantan</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="photos/9.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Play for national team </b></p>
        <p>Some of our players get chance to play for Malaysia National Futsal Team </p>
      </div>
    </div>
  </div>
  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Our Club</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>futsaluitmck@email.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>UiTM Machang, kelantan</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>0137306941</p>
         <p>0134738293</p>
        <p>0127389284</p>
        <p>0178928321</p>
        <p>0138294213</p>
        <p>0146829371</p>
        <p>0112930183</p>
        <p>0129384927</p>
        <p>0197193754</p>
        <p>0111929384</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>
  
  <div class="w3-black w3-center w3-padding-24">Futsal Club UiTMCK

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
