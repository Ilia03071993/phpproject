<?php


require_once __DIR__ . "/vendor/autoload.php";

use App\Connect;


if (!Connect::check()) {
    die("Error connect to db");
}

require_once "includes/header.php";

?>
<main class="main">
    <div class="container">
        <h2 class="title">Список комнат</h2>
        <ul class="rooms">
            <?php
                $rooms = mysqli_query(Connect::db(), "SELECT * FROM `rooms`");
            while ($room = mysqli_fetch_assoc($rooms)){
                ?>
                <li class="rooms_item">
                    <h2 class="room-title"><?=$room["title"]?></h2>
                    <p class="rooms-members-count">Количество участников : 92</p>
                    <form action="/" method="post">
                        <input type="hidden" name="id" value="<?=$room["id"] ?>">
                        <input type="text" name="username" class="form-input" placeholder="Ваше имя">
                        <button type="submit" class="btn form-button" name="submit">Перейти</button>
                    </form>
                    <p>Message</p>
                </li>
            <?php
            }
            ?>

        </ul>
    </div>
</main>
