<?php

//getResults function retrieves all practice rooms from database and displays them by level
function getResults($level){
  $limit = 1;

  //connect to the database
  require('../connection.php');

  $query = mysqli_query($connect,"SELECT * FROM content WHERE category='$level' LIMIT $limit ");

  while ($row = mysqli_fetch_array($query)){
    $total = mysqli_num_rows($query);
    //start a new column for each room
    echo '<div class="col-md-4">';
    //display an image of the room
    echo '<img class="img-thumbnail" src="' . $row['url'] . '">';
    //display title of room
    echo '<h4 class="shy-bladder">' . $row['title'] . '</h4>';
    echo '<ul>';
    echo '<li>Noise level: ' . $row['noise'] . '</li>';
    echo '<li>Noise exposure: ' . $row['noiseExposure'] . '</li>';
    echo '<li>Visual exposure: ' . $row['visualExposure'] . '</li>';
    echo '</ul>';
    //display a More Details button
    echo '<a class="btn btn-success custom">More Details</a>';
    echo '</div>';  //end column
  } //end of while loop
  $limit+=1;
} //end of getResults function







 ?>
