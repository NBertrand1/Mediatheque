<?php

session_start();
//suprumer une variable
unset($_SESSION["username"]);

header("Location: index.html");
?>