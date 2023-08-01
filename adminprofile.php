<?php
session_start();
require_once("partials/header.php");
require_once("classes/admin.php");


//  $adminone = $_SESSION['admin_id'];
// $newprofile =new Admin();
// $adminprofile = $newprofile->getAdminDetails($adminone);

?>
 
  <div class="profile-container">
    <!-- <p class="text-center"> Welcome, <?php echo $adminprofile ["firstname"]; ?>  </p> -->
    <div class="img">
    <img src="images/banner.jpg" alt="Profile Picture" class="profile-image">
  </div>
    <!-- <h1 class="profile-name"><?php echo $adminprofile ["firstname"]; ?> <?php echo $adminprofile ["lastname"]; ?> </h1> -->
    <!-- <p class="profile-email"> <?php echo $adminprofile ["email"]; ?></p> -->
    <!-- <p class="profile-contact"> <?php echo $adminprofile ["contact"]; ?></p> -->
    

        <p><a href="adminchangepassword.php">Change Password</a></p>
       <p> <a href="houselistings.php" class="btn btn-success"> View all Houses </a> </p>

        

        <?php
         require_once("partials/logout.php");
         ?>
  </div>


