<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avito</title>
</head>
<body>
    <form method="post" action="save.php">
        <label for="email">Email</label>
        <label>
            <input type="email" name="email" required>
        </label>

        <label for="categories">Category</label>
        <label>
            <select name="categories" required>
                <?php
                $files = scandir("./categories");
                foreach ($files as $file)
                    if ('.' != $file && '..' != $file)
                        echo "<option value='$file'>$file</option>";
                ?>
            </select>
        </label>

        <label for="title">Title</label>
        <label>
            <input type="text" name="title" required>
        </label>

        <label for="text">Text</label>
        <label>
            <textarea rows="5" name="text"></textarea>
        </label>

        <input type="submit" value="Save">

    </form>
</body>
