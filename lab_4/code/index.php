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
                require 'vendor/autoload.php';
                error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

                $client = new Google_Client();
                $client->setApplicationName('php-lab-4');
                $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
                $client->setAccessType('offline');
                $path = 'credentials.json';
                $client->setAuthConfig($path);

                $service = new Google_Service_Sheets($client);

                $spreadsheetId = '1ruEPHBsrQh9OfpIxJhbf9jwouhIrIRcPZ2q0GavMbFQ';
                $spreadsheet = $service->spreadsheets->get($spreadsheetId);
                $sheets = $spreadsheet->getSheets();
                foreach ($sheets as $sheet) {
                    $sheetTitle = $sheet->getProperties()->getTitle();

                    $response = $service->spreadsheets_values->get($spreadsheetId, $sheetTitle);
                    $values = $response->getValues();
                    if (!empty($values) && count($values) >= 4) {
                        $category = htmlspecialchars($values[0][0]);
                        $title = htmlspecialchars($values[1][0]);
                        $email = htmlspecialchars($values[2][0]);
                        $description = htmlspecialchars($values[3][0]);

                    }
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
