 <?php
session_start();
require_once("partials/header.php");
require_once("classes/landlord.php");


$landlordone = $_SESSION['landlord_id'];
$newprofile =new Landlord();
$landlordprofile = $newprofile->getLandlordDetails($landlordone);

?>
 
  <div class="profile-container">
     <p class="text-center"> Welcome, <?php echo $landlordprofile["firstname"]; ?>  </p>
       <div class="img">
        <img src="<?php echo "action/".$landlordprofile['image'] ?>" alt="Profile Picture" class="profile-image">
          </div>
           <h1 class="profile-name"><?php echo $landlordprofile["firstname"]; ?> <?php echo $landlordprofile["lastname"]; ?> </h1>
             <p class="profile-email"> <?php echo $landlordprofile["email"]; ?></p>
              <p class="profile-contact"> <?php echo $landlordprofile["contact"]; ?></p>
               <p><a href="editlandlordprofile.php">Edit My Profile</a></p>
                 <p><a href="landlordchangepassword.php">Change Password</a></p>
                  <p> <a href="addproperty.php" class="btn btn-success"> Upload a House </a> </p>
                      <?php
                      require_once("partials/logout.php");
                      ?>
                       </div>



  <?php
require_once("partials/footer.php");
?>