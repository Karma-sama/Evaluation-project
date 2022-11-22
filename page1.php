<?php

include 'header.php'

?>


<?php



$number ;
$count = count($_SESSION['list']);
$i= -1;

// var_dump($_SESSION);

if (
  $count < 2 
 ) {
    $number = 'élève';
    
    
  } else {
    $number = 'élèves';
  }
  
  echo '<p>' . $count . '' . $number . '</p>';
  
  
for ( $count = 0; $count < count($_SESSION['list']); $count++ ) {
  $i = $i +1 ;
  echo '<a href="page2.php?i=' . $i . '">' . $_SESSION['list'][$count][0] . ' ' . $_SESSION['list'][$count][1] . '</br>' . '</a>';}

  // var_dump($i);
  
  //foreach ($_SESSION['list'] as $val) {
    
  //echo'<p>' . $val[0] . '' . $val[1] . '' . $val[2] '</p>';}
 ?>
 
 <?php
 
 include 'footer.php'
 
 ?>