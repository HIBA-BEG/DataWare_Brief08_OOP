<?php
session_start();
session_destroy();
header('Location: ../authentification.php');
exit();
?>