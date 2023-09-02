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
        <h1>Узнай информацию о числе!</h1>
        <form action="/result.php" method="GET">
            <input type="text" id="input" placeholder="Введите число" name="num">
            <button type="submit" id="searchBtn">Поиск</button>
        </form>
    </div>
</body>

</html>