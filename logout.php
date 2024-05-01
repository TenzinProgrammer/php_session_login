<?php
 session_start();
 session_destroy();
 setcookie('user_session', '', time()-3600, '/');
 header("Location: home.php");
 exit();
?>