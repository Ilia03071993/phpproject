<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Connect;
use App\Rooms;
if (!Connect::check()){
    die("Error connect to db");
}
?>
<main class="main">
    <div class="container">
        <h2 class="title">Создать комнату</h2>
        <form action="create-room.php" method="post">
            <input type="text" name="title" class="form-input" placeholder="Название комнаты">
            <button type="submit" name="submit"> Создать</button>
        </form>

        <?php
        if (!is_null($_POST["submit"])) {
           $room = Rooms::create($_POST["title"]);

           ?>
        <p>
            <?= $room ? "Комната успешно создана" : "Ошибка при добавлении комнаты"; ?>
        </p>
        <?php
        }

        ?>
    </div>
</main>
