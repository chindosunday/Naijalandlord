<?php
require_once("partials/header.php");
require_once('classes/landlord.php');

$landlord = new Landlord();
$landlords = $landlord->fetchProperty();


?>
  
  <section class="hero">
    <div class="overlay">
      <div class="centered-text">
        <h1>Your Next apartment is just a click away</h1>
      </div>
    </div>
  </section>
    <div class="row">
      <h4 class="text-center py-3">Feature Houses</h4>
    <?php
      foreach($landlords as $house){
        ?>
  <div class="col-md-4">
        <div class="card" style="width: 30rem;">
        <img src="<?php echo 'action/'.$house["house_image"]; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text"><?php echo $house["house_amount"];?></p>
          <p class="card-text"><?php echo $house["house_description"];?></p>
          <a href="house_details.php?id=<?php echo $house["house_id"];?>" class="btn-sm btn btn-primary">View Detail</a>
          
      </div>
      </div>

  </div>


<?php
      }
      ?>
    </div>

          
  <div id="map"> </div>

  
  <script> 
  function initMap(){
    var location = {lat: 25.363, lng:131.044}
    var Map = new google.maps.Map(document.getElementById("map"), {
      zoom:4,
      center:location
    });

    marker = new google.maps.Marker({
      position: location,
      map: map 

    });

  }
  
  </script>

<script async defer src="https://maps.googleapis.com/maps/api/
js?key=AIzaSyBYzXj5wF4L6mChyyc5xwfb2QT1QEZ9VN8&callback=initMap"></script>


  </div>


















  <div class="mb-5"></div>





<?php
require_once("partials/footer.php");

?>