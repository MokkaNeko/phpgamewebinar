<?php
session_start();
session_destroy();
header('Location: firstGame.php');
?>