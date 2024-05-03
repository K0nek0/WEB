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
    <div id="form">
        <form method="post" action="save.php">
            <label for="email">Email</label>
            <label>
                <input type="email" name="email" required>
            </label>

            <label for="categories">Category</label>
            <label>
                <select name="categories" required>
                    <option value="cars">cars</option>
                    <option value="other">other</option>
                </select>
            </label>

            <label for="title">Title</label>
            <label>
                <input type="text" name="title" required>
            </label>

            <label for="text">Description</label>
            <label>
                <textarea rows="5" name="text"></textarea>
            </label>

            <input type="submit" value="Save">

        </form>
    </div>
    <div id="table">
        <table>
            <thead>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
            </thead>
            <tbody>
            <?php
            foreach ($files as $category){
                foreach ($files as $category){
                    if ($category == '.' || $category == '..') continue;
                    $titles = scandir("./categories/$category");
                    foreach ($titles as $title){
                        if ($title == '.' || $title == '..') continue;
                        $newTitle = substr($title, 0, strlen($title) - 4);
                        $desc = file_get_contents("./categories/$category/$title");
                        echo "<tr>";
                        echo "<td>$category</td>";
                        echo "<td>$newTitle</td>";
                        echo "<td>$desc</td>";
                        echo "</tr>";
                    }
                }
                break;
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
