<?php
include('Includes/header.php');
?>

  <div class="container">

    <div class="row text-center">
      <div class="col-md-12">
      <h2 class="shy-bladder">Join</h2><p class="grey text-center">Please fill in the fields below to join FU Phobia. Membership is $39 and you will be asked to input your credit card information. All information is confidential and will not be shared.</p>
    </div><!--ends column containing Join header-->
    </div><!--ends first row-->

  <div class="row">
    <div class="col-md-12">
<form>
  <div class="form-group">
<label for="emailAddress">Email address</label>
<input type="email" class="form-control" id="emailAddress" placeholder="email@example.com">
  </div><!--ends form group-->
  <div class="form-group">
  <label for="pword">Create a password</label>
  <input type="password" class="form-control" id="pword" placeholder="Create a password">
</div>
<div class="form-group">
  <label for="gender">Gender</label>
  <select class="form-control form-control-lg" id="gender">
  <option>Male</option>
  <option>Female</option>
</select>
<i>*You will have access to practice rooms for one gender only.</i>
</div><!--ends gender select dropdown-->
<div class="text-center"><btn class="btn btn-success custom">Submit</button></div><!--ends div that centers button-->
  </form>

</div><!--ends column containing form-->
  </div><!--ends form row-->


    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>
