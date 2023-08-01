<?php
require_once("partials/header.php");


?>
<div class="container">
<div class="accordion" id="accordionExample mt-5">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        How does the App work?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        This is your go to place when it comes to property leasing Potential landlords come here to display their property
         free of charge for potential tenants to rent out. This is a plartform that gives people in the remotest places access to market 
         their apartments for interested tenants to rent.    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        As a Landlord, must I register?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <strong> Yes!</strong> <span> As a landlord who is interested in marketting his product, you must register. This is because we want to be able to 
    curb the cases of fraud. Once you register, you can go ahead and display your property without any restrictions. There's no limit to the
    number of properties you can market and sell. </span>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
   <span> As a tenant, must I register? </span>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">

      <span>Registeration for tenant is optional. You must not register to rent an apartment of your choice. However, it is adviced you register 
      so that our privacy policy can cover you. Any transaction that is not done on this plartform is not covered by our privacy policy
      </span>
      
    </div>
    </div>
  </div>
</div>
</div>

<script src="assets/bootstrap.bundle.js"> </script>


						
					
<?php
require_once("partials/footer.php");
?>