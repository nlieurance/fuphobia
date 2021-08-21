<?php
include('Includes/header.php');
include('Includes/functions.php');
?>



  <div class="container">

    <div class="row text-center">
      <div class="col-md-12">
      <h2 class="shy-bladder">Your Customized Practice Content</h2><p class="grey text-center">Welcome. We've organized our practice environments according to your needs. You can start your practice with the content in Level 1 and move on when you're ready. If you prefer, you can view content in any order. You can control background noise, faucet and blow dryer sounds inside practice rooms. Watch the video tutorial below to find out how.</p>
    </div><!--ends column containing h2 header-->
    </div><!--ends first row-->

  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="grey">Level 1: Single occupant restrooms. High degree of privacy and quiet.</h3>
      </div><!--ends column-->
  </div><!--ends Level 1 title row-->
  <div class="row text-center">
    <?php
    //getResults function displays customized user content
    getResults('A');
    ?>
  </div><!--ends Level 1 row-->

  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="grey">Level 2: Single occupant restrooms. One person nearby not making noise.</h3>
      </div><!--ends column-->
    </div><!--ends row-->
    <div class="row text-center">
      <?php
      //getResults function displays customized user content
      getResults('B'); ?>
    </div><!--ends Level 2 row-->

    <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="grey">Level 3: Single occupant restrooms. Multiple people nearby not making noise.</h3>
        </div><!--ends column-->
      </div><!--ends row-->
      <div class="row text-center">
        <?php
        //getResults function displays customized user content
        getResults('C'); ?>
      </div><!--ends Level 4 row-->

      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="grey">Level 4: Single occupant restrooms. People nearby talking and making noise.</h3>
          </div><!--ends column-->
        </div><!--ends row-->
        <div class="row text-center">
          <?php
          //getResults function displays customized user content
          getResults('D'); ?>
        </div><!--ends Level 4 row-->

        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="grey">Level 5: Single occupant restrooms. Moderate degree of privacy and quiet.</h3>
            </div><!--ends column-->
          </div><!--ends row-->
          <div class="row text-center">
            <?php
            //getResults function displays customized user content
            getResults('E'); ?>
          </div><!--ends Level 5 row-->





    </div><!-- /.container -->


    <?php
    include('Includes/footer.php');
    ?>
