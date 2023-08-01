<?php
require_once("partials/header.php");
require_once("classes/category.php");
require_once("classes/landlord.php");
require_once("classes/location.php");


$catOne = new Category();
$category = $catOne->fetchCategories();


$mylocation = new Location();
$location = $mylocation->fetchLocation();
?>

        <div class="container">    
        <form action="action/addpropertyprocess.php"  method="POST" enctype="multipart/form-data">
          <div class="row mb-4">
            <div class="col  bg-tertiary">
              <div class="form-outline">
          <div class="row mb-4">

                  
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label"> Owner </label>
            <input type="text" name="owner" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Amount</label>
            <input type="number" name="amount" class="form-control">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"> House Description</label>
            <textarea class="form-control" name="desc"  rows="3"></textarea>
          </div>


          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Location</label>
            <select class="form-select" name="location">
									<option selected> Choose a Location </option>
                   <?php
                  foreach($location as $house){
                  ?>
                   <option value="<?php echo $house["location_id"]; ?> "> <?php echo $house["state"]; ?> </option>
                  <?php
                  }
                  ?> 
              </select>
          </div>
                    <!-- Looping through the categories -->

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Category</label>
            <select class="form-select" name="choose">
									<option selected> Choose a category </option>
                   <?php
                  foreach($category as $categories){
                  ?>
                   <option value="<?php echo $categories["cat_id"]; ?> "> <?php echo $categories["category"]; ?> </option>
                  <?php
                  }
                  ?> 
              </select>
          </div>
               


          <div class="mb-3">
          <label class="form-label" for="form7Example1">House Image</label>
          <input type="file" name="image" type="file" class="form-control" />
          
          
          </div>
          <!-- Message input -->
          <div class="form-outline mb-4">
            <button class="btn btn-success mt-3" name="submit">Add House</button>
          </div>
 
        </form>
      </div>
    </div>
  </div>

  
</div>
</div>
</div>
 



<?php
require_once("partials/footer.php");
?>