<?php

session_start();

unset($_SESSION["uid"]);

unset($_SESSION["username"]);
unset($_SESSION["rf_id"]);
header("location:../index.php");

?>