 <?php 
 session_start();
 $_SESSION['list'] = [];
 session_destroy();
 header ("Refresh: 3;URL=index.php");
?> 