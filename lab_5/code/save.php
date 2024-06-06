<?php
function redirectToHome(): void
{
    header("Location: /");
    exit();
}

if (false === isset($_POST["email"], $_POST["categories"], $_POST["title"], $_POST["text"])) {
    redirectToHome();
}

$email = $_POST["email"];
$category = $_POST["categories"];
$title = $_POST["title"];
$text = $_POST["text"];

$filePath = "categories/$category/$title.txt";

if (false === file_put_contents($filePath, $text)) {
    throw new Exception("Something went wrong");
}
chmod($filePath, 0777);
redirectToHome();
