<?php

session_start();     
session_destroy();     
header("Location: loginTugas.php");     
die(); 

?>
