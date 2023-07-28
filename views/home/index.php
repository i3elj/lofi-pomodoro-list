<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto&family=Roboto+Condensed&family=Russo+One&display=swap" rel="stylesheet">
    <title>Lofi Pomodoro List</title>
    <script type="module" src="views/home/main.mjs"></script>
    <link rel="stylesheet" type="text/css" href="views/home/style.css">
    <?php
    require 'views/home/pomodoro/timer/config/head.php';
    require 'views/home/pomodoro/head.php';
    require 'views/home/todo/head.php';
    require 'views/home/lofi/head.php';
    ?>
</head>

<body>
    <?php
    require 'views/home/icons.php';

    require 'views/home/pomodoro/timer/config/view.php';
    require 'views/home/pomodoro/view.php';
    require 'views/home/todo/view.php';
    require 'views/home/lofi/view.php';
    ?>
</body>

</html>
