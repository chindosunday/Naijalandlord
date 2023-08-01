<?php

require_once("partials/header.php");
require_once("classes/tenant.php");

$tenantone = $_SESSION['tenant_id'];
$profile =new Tenant();
$profile2 = $profile->getTenantDetails($tenantone);

?>


    <div class="profile-container">
    <p class="text-center"> Welcome,  <?php echo $profile2['firstname']; ?></p>
    
    <img src="<?php echo "action/".$profile2['image']; ?>" class="profile-image">
  
    <h1 class="profile-name"><?php echo $profile2["firstname"]; ?> <?php echo $profile2["lastname"]; ?> </h1>
    <p class="profile-email"> <?php echo $profile2["email"]; ?></p>
    <p class="profile-contact"> <?php echo $profile2["contact"]; ?></p>
    <p> <a href=" payment.php"> Rent Now </a></p>
    <p><a href="edittenantprofile.php">Edit My Profile</a></p>
        <p><a href="tenantchangepassword.php">Change Password</a></p>
         
         <?php
         require_once("partials/logout.php");
         ?>


        
  </div>

  <?php
require_once("partials/footer.php");
?>