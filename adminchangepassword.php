<?php
require_once("partials/header.php");
?>
<div class="container">
    
    <div class="row">

        <!-- the sidebar is here -->
  
  
  <div class="col-md-12 mb-4 mt-4">
    <div class="card mb-4">
      <div class="card-header py-3">
      <h2 class="text-center">Change Password</h2>
      </div>
      <div class="card-body" style="min-height:200px">
 
       <form action="action/adminchangepasswordprocess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Old Password</label>
                <input type="password" name="oldpassword" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">New Password</label>
                <input type="password" name="newpassword" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="changepassword" class="btn btn-success">Change Password</button>
       </form>
       
      </div>
    </div>
  </div>

 
</div>
</div>

 



<?php
require_once("partials/footer.php");
?>