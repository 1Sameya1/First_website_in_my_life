<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Денисова А.А.</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
</head>
<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="col-4 nav_logo"></div>
            <div class="col-8">
                <div class="nav_text">Всем доброго времени суток и да начнется шоу!</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-7" style="text-align: center;">
                <h2>Сегодня мы познакомимся с нашим новым персонажем - Денисовой Анной Алексеевной!</h2>
                <p>Она учится на 3 крусе Московского Энергетического Института, ведет активный студенческий образ жизни, постоянно учит что-то новое в сфере информационной безопасности, попробовала себя в нескольких направлениях и, кажется, отпределилась, что ей нужно! А еще она умеет сворачивать язык в трубочку!</p>
            </div>
            <div class="col-5">
                <div class="row my_photo"></div>
                <div class="row" style="text-align: center; font-size: 18px;"><p>Время начинать!</p></div>
                <div class="row" style="text-align: center; font-size: 18px;"><p>Денисова А.А</p></div> 
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton">Нажми на меня</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="Hello">
                    Доброго вечера, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class="col-12">
            <form method="POST" action="profile.php" enctype="multipart/form-data" name="upload">
                    <input type="text" class="form" type="text" name="title" placeholder="На самом деле сворачивать язык в трубочку - это просто"></div>
                    <textarea name="text" cols="30" rows="10" placeholder="Напиши как ты сворачиваешь язык в трубочку!"></textarea>
                    <button type="submit" class="btn_red" name="submit" style="text-align: center">В продакшн!</button>
            </div>
        </div>
    </div>
<script type="text/javascript" src="js/back.js"></script>
</body>
</html>

<?php
require_once('db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'awsd', 'first');

if (isset($_POST['submit'])) { 
     
    $title = $_POST['title'];
    $main_text = $_POST['text'];
    
    if (!$title || !$main_text) die ("Заполните все поля");
    
    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");

}
?>
