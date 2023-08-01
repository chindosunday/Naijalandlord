<?php


include_once("partials/header.php");
require_once("classes/tenant.php"); //to get the details of the user

?>
   <div class="container">    
  <div class="col-md-12 mb-4">
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0">Edit Profile</h5>
      </div>
      <div class="card-body bg-tertiary" style="min-height:200px">
      <form action="action/edittenantprocess.php" method="POST" enctype="multipart/form-data">
          <div class="row mb-4">
            <div class="col  bg-tertiary">
              <div class="form-outline">
          <div class="row mb-4">


          <div class="col-md-6">
            <label for="inputEmail4" class="form-label"> First Name </label>
            <input type="text" name="fname" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label"> Last Name </label>
            <input type="text" name="lname" class="form-control">
          </div>
           
          <div class="mb-3">
          <label class="form-label" for="form7Example1"> Phone Number</label>
          <input type="number" name="phone" class="form-control">
          </div>
          
          <div class="mb-3">
          <label class="form-label" for="form7Example1"> IMage</label>
          <input type="file" name="file" class="form-control">
          </div>
          
          <div class="form-outline mb-4">
            <button class="btn btn-primary mt-3" name="update"> Update </button>
          </div>
 
        </form>
      </div>
    </div>
  </div>

  
</div>
</div> 

    </div>
  </div>

 
</div>


      
 



<?php
require_once("partials/footer.php");
?>