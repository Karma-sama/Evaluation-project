<?php

include 'header.php' ;

?>

<?php

if (isset($_GET['i'])) {
    $root = $_GET['i'];

    for ($student = 0; $student < count($_SESSION['list'][$root]); $student++) {
    echo $_SESSION['list'][$root][$student];
}
}

// var_dump($root);
// var_dump($student);
// var_dump($_GET)

?>

<?php

include 'footer.php'; 

?>