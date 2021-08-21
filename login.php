<?php
include('Includes/header.php');
?>

  <div class="container">

    <div class="row text-center">
      <div class="col-md-12">
      <h2 class="shy-bladder">Log In</h2><p class="grey text-center">Please log in to view your virtual practice environments.</p>
    </div><!--ends column containing Join header-->
    </div><!--ends first row-->

  <div class="row">
    <div class="col-md-12">
<form>
  <div class="form-group">
<label for="emailAddress">Email address:</label>
<input type="email" class="form-control" id="emailAddress" placeholder="email@example.com">
  </div><!--ends form group-->
  <div class="form-group">
  <label for="pword">Password:</label>
  <input type="password" class="form-control" id="pword" placeholder="Enter your password">
</div>
<div class="text-center"><btn class="btn btn-success custom">Submit</button></div><!--ends div that centers button-->
  </form>

</div><!--ends column containing form-->
  </div><!--ends form row-->


    </div><!-- /.container -->
<script>
    var sliders = [];
    var create = function(){
    for (i===0; i++; i<12){
      sliders[i] = 'document.getElementById(range-slider'+ i +')';
    }
    }
    	console.log('Hello!');

  window.onload = create();
</script>

<?php
include('Includes/footer.php');
 ?>
