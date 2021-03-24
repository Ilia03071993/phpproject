<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>

</head>
<body>
<?php
require_once "includes/header.php";
?>

<main class="main">
    <div class="container">
        <h2 class="title">Комната: Название</h2>
        <div class="chat">
            <div class="message-container">
                <div class="message-col">
                    <p class="name">Ivan</p>
                    <div class="message-body">
                        Lorem ipsum dolor sit amet, consectetur?
                    </div>
                </div>
            </div>
            <div class="message-container owner">
                <div class="message-col">
                    <p class="name">Ivan</p>
                    <div class="message-body">
                        Lorem ipsum dolor sit amet, consectetur?
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<br>
<br>
<form action="">
    <input type="text">
    <button type="submit">Отправить</button>
</form>
</body>
</html>

