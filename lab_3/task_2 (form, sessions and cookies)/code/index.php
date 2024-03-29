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
<div>
    <h2>Sessions</h2>
    <h3>Sessions. Part 1</h3>
    <div class>
        <label>Tell us about yourself</label>
        <form method="post" action="step_b.php">
            <label for="surname">Surname</label>
            <input id="surname" name="surname"/><br>
            <label for="name">Name</label>
            <input id="name" name="name"/><br>
            <label for="age">Age</label>
            <input id="age" type="number" name="age"/><br>

            <input type="submit"/>
        </form>
    </div>
    <h3>Sessions. Part 2</h3>
    <div class>
        <label>Tell us about yourself</label>
        <form method="post" action="step_c.php">
            <label for="name">Name</label>
            <input id="name" name="name"/><br>
            <label for="age">Age</label>
            <input id="age" type="number" name="age"/><br>
            <label for="card_numb">Сard number</label>
            <input id="card_numb" name="card_numb"/><br>
            <label for="back_numb">Back numbers</label>
            <input id="back_numb" type="number" name="back_numb"/><br>

            <input type="submit"/>
        </form>
    </div>
</div>
</body>
</html>
