<?php

if (isset($_POST["text"]))
    setcookie("message", $_POST["text"]);

header("location: index.php");
exit();
