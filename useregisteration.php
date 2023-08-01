<?php
require_once("partials/header.php");
?>

<div class="container-fluid bg-white">
  <div class="row">
     <div class="col-md-3"></div>
      <div class="col-md-6  bg-light py-1 my-5 px-5">
         <h1 class="text-center text-danger"> Sign Up Here</h1>

       <form class="row g-3 mt-2" action="action/userprocess.php" method="POST">
          <div class="col-md-6">
           <label for="firstname" class="form-label text-tertiary">First Name</label>
             <input type="text" class="form-control" name="firstname" placeholder="Enter first Name">
                </div>
                  <div class="col-md-6">
                    <label for="lastname" class="form-label text-tertiary">Last Name </label>
                      <input type="text" class="form-control" name="lastname" placeholder="Enter lastname">
                        </div>
                          <div class="col-12">
                           <label for="phonenumber" class="form-label text-tertiary"> Phone number </label>
                            <input type="number" class="form-control" name="phone" placeholder="Enter your phone number">
                            </div>
                        <div class="col-12">
                      <label for="emailaddress" class="form-label text-tertiary">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                 </div>
                 <div class="col-md-12">
                 <label for="option"> I am Registering as a </label>
							  <select class="form-select" name="choose">
            	<option value="landlord"> </option>
							<option value="landlord"> Landlord</option>
              <option value="tenant"> Tenant </option>
            </select>
          </div>
         <div class="col-12">
        <label for="password" class="form-label text-tertiary"> Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password muat be at least eight characters ">
      </div>
      <div class="col-12">
      <label for="emailaddress" class="form-label text-tertiary"> Confirm Password</label>
      <input type="password" class="form-control" name="conpassword" placeholder="Confirm Password">
      </div>
      <button type="submit" name="register" class="btn btn-danger form-control">Submit</button>
         </form>
       <p class="mt-3 text- alighn  text-success">Already have an account?<a href="userlogin.php" class="btn btn-white">Login Here</a></p>
        </div>
      <div class="col-md-3"></div> 
    </div> 
</div>


<?php
require_once("partials/footer.php");
?>