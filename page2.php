<?php

include 'header.php' ;

?>

<?php



if (isset($_GET['i'])) {
    $root = $_GET['i'];

    echo '<div class= column>';

    for ($student = 0; $student < count($_SESSION['list'][$root]); $student++) {
    echo  $_SESSION['list'][$root][$student] . '</br>'  ;

}
echo '</div>';
}


// var_dump($root);
// var_dump($student);
// var_dump($_GET)

?>

<?php

include 'footer.php'; 

?>