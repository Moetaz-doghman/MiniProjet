<?php

session_start();

unset($_SESSION["id"]);
unset($_SESSION["nom"]);
unset($_SESSION["prenom"]);
unset($_SESSION["email"]);
unset($_SESSION["numero"]);
unset($_SESSION["password"]);
unset($_SESSION["date"]);


header("location:login.php");

?>