<?php

require_once("partials/header.php");

?>
<section class="hero">
    <div class="overlay">
      <div class="centered-text">
        <h1>Your Next apartment is just a click away</h1>
      </div>
    </div>
  </section>

<div class="container">
<div class="row mt-5">
  <div class="col-md-6 bg-light">

  <span class="mt-5"> As a real estate firm, 
    we are constantly striving to improve our services and delivery to our esteemed 
  customers. We are ready to hear feedbacks, queries and complains you might have about our service delivery.
For this reason, we would like you to fill up this form in other for us to serve you better. 
We promise to take all your feedbacks very seriously. 
</span>

  </div>

  <div class="col-md-6">
    <h5 class="text-danger text-center"> Your feedback</h5>
  <form action="action/contactusprocess.php" method="POST">

  <div class="col-12">
        <label for="emailaddress" class="form-label text-tertiary">Name</label>
        <input type="text" class="form-control text-" name="name">
</div>
<div class="col-12">
        <label for="emailaddress" class="form-label text-tertiary">Email</label>
        <input type="email" class="form-control" name="email">
</div>
     
<div class="col-12">
        <label for="emailaddress" class="form-label text-tertiary"> Contact </label>
        <input type="number" class="form-control" name="phone">
</div>


<div class="col-12">
            <label for="exampleFormControlTextarea1" class="form-label"> Your Message </label>
            <textarea class="form-control" name="msg"  rows="3"></textarea>
          </div>
      <button class="btn btn-primary mb-3 mt-3" name="btn"> Submit</button>
  </form>

  </div>

  

</div>


</div>

<div class="mb-5"></div>
<?php
require_once("partials/footer.php");
?>