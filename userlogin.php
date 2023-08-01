<?php
require_once("partials/header.php");


?>

<div class="container-fluid bg-white">
  <div class="row">
        <div class="col-md-3"></div>
          <div class="col-md-6  bg-light py-1 my-5 px-5">
            <h1 class="text-center text-danger"> Login</h1>
              <form class="row g-3 mt-2 mb-2" method="POST" action="action/processuserlogin.php">
                   <div class="col-12">
                    <label for="emailaddress" class="form-label text-tertiary">Email</label>
                      <input type="email" class="form-control" name="email">
                        <div class="col-12">
                       <label for="password" class="form-label text-tertiary"> Password</label>
                       <input type="password" class="form-control" name="password">
                       </div>
                     <div class="col-md-12 mb-5">
                   <label for="option mt-3"> I am a </label>
							    <select class="form-select" name="choose">
                 <option value="landlord"> </option>
									<option value="landlord"> Landlord</option>
                  <option value="tenant"> Tenant </option>
                  <option value="admin"> Admin </option>
                 </select>
                </div>
                <div class="mt-5">
                <button type="submit" name="button" class="btn btn-danger form-control">Login </button>
               </form>
              <p class="mt-3 text- align">Don't have an account?<a href="useregisteration.php" class="btn btn-white  text-success"> Sign up Here</a>
            </p>
        </div>
        <div class="col-md-3"></div> 
    </div> 
</div>

<?php
require_once("partials/footer.php");
?>