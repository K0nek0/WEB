<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
</head>
<style>
    input {
        margin-left: 10px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
</style>
<body>
<h1>Session and Cookies</h1>
<div class>
    <h2>Cookies</h2>
    <form method="post" action="step_a.php">
        <label for="text">Enter your text</label><br>
        <textarea id="text" name="text"></textarea><br>
        <input type="submit"/>
    </form>
    <?php
    if (isset($_COOKIE["message"])) {
        $message = $_COOKIE["message"];
        echo "There are ", str_word_count($message), " words in your message<br>";
        echo "There are ", strlen($message), " chars in your message <br>";
    }
    ?>
</div>
