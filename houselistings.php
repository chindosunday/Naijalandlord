<?php
require_once("partials/header.php");
require_once("classes/admin.php");

$admin = new Admin();
$myadmin = $admin->fetchProperty();


?>
<div class="container">
    
    <div class="row">
  
  <div class="col-md-12 mb-4 mt-5">
    <div class="card mb-4">
      <div class="card-header py-3">
        <h5 class="mb-0 text-center">All Houses</h5>
      </div>
      
       <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"> Owner</th>
      <th scope="col">Description</th>  
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
    foreach($myadmin as $admin){
      ?>


 <tr>
      <th scope="row"></th>
      <td><?php echo $admin["firstname"];?></td>   
      <td><?php echo $admin["house_description"]?></td>
      <td><a href='delete.php' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i>&nbsp;Delete</a>
        &nbsp;&nbsp;
        <a href='details.html' class='btn btn-sm btn-info'><i class='fa fa-list'></i>Details</a>
        &nbsp;&nbsp;
        <a href='details.html' class='btn btn-sm btn-success'><i class='fa fa-list'></i>Edit</a>
      </td>
    </tr>

<?php
    }
  ?>



    
  </tbody>
</table>

      </div>
    </div>
  </div>

 
  <div class="card-body" style="min-height:200px">

</div>
</div>

 



<?php
require_once("partials/footer.php");
?>