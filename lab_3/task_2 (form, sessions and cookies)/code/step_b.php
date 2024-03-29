<?php

if (!isset($_POST["age"], $_POST["name"], $_POST["surname"]))
    header("location: index.php");

session_start();
$_SESSION["age"] = $_POST["age"];
$_SESSION["name"] = $_POST["name"];
$_SESSION["surname"] = $_POST["surname"];


echo "Collected data:<br>";
echo "Your name is {$_SESSION["name"]} {$_SESSION["surname"]}<br>";
echo "You are {$_SESSION["age"]} years old";
