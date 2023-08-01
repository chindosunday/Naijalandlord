<?php
require_once("partials/header.php");
require_once("classes/property.php");
session_start();
if(isset($_GET['id'])){
    $house_id = $_GET['id'];
    $house = new Property();
    $myhouse = $house->getPropertyDetail($house_id);


}else{
    header("location:index.php");
    exit();
}


?>



<section>
    <div class="container">
        
<h1>House Details</h1>

        <div class="row">
            <div class="col-md-6">
            <h5> Amount: <?php echo $myhouse["house_amount"]?></h5>
            <h5> Description: <?php echo $myhouse["house_description"]?></h5>
            <h5> Ownner: <?php echo $myhouse["firstname"];?></h5>
            <h5> Contact: <?php echo $myhouse["contact"]?></h5>
            <h5> Email: <?php echo $myhouse["email"]?></h5>
            <h5> State: <?php echo $myhouse["state"]?></h5>
            <h5> Local Government: <?php echo $myhouse["local_gov"]?></h5>
            <h5> District: <?php echo $myhouse["town_name"]?></h5>
            </div> 
            </div> 

            <div>
            <a href="userlogin.php" class="btn-sm btn btn-primary mt-5"> Sign in to Rent Now</a>

            </div>

            </div> 

          

            <?php
require_once("partials/footer.php");
?>