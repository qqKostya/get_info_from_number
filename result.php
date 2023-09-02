<?php
require_once __DIR__ . '/src/getApi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск информации</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div id="background-animation"></div>
    <div class="container">
        <!-- Остальное содержание здесь -->
        <div id="result">
            <h2>Результат:</h2>
            <p id="info"><?= getInfoForNumber($_GET['num']); ?></p>
            <a href="/index.php" id="searchBtn">Вернуться</a>
        </div>
    </div>
</body>

</html>