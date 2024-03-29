<?php

if (!isset($_POST["name"], $_POST["age"], $_POST["card_numb"], $_POST["back_numb"]))
    header("location: index.php");

session_start();
$_SESSION["personalData"] = [$_POST["name"], $_POST["age"], $_POST["card_numb"], $_POST["back_numb"]];


echo "<ul>";
foreach ($_SESSION["personalData"] as $dataDetail) {
    echo "<li>{$dataDetail}</li><br>";
}
echo "</ul>";
