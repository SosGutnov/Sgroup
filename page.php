<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sgroup</title>
</head>
<body>
    <div class="main">
        <header class="div_header">
            <ul class="ul_header" >
                <li>
                    <div style="padding-right: 20px">
                        <?php echo $_COOKIE["user"] ?>
                    </div>
                </li>
                <li style="padding-right: 20px">
                    <a href="exit.php" style="width: 200px;">
                        <div class="hr" style="text-align: center;">
                            Выйти
                        </div>
                    </a>
                </li>
                <li>
                    <a href="reg_room.php" style="width: 300px; padding-right: 20px; font-size:25px;">
                        <div class="hr" style="text-align: center; width: 300px; font-size:25px;">
                            Создать комнату
                        </div>
                    </a>
                </li>
            </ul>
        </header>
        <div class="page_body">
            <div class="categories">
                <ul>
                    <li>
                        <a href="" class="categories_button">
                            <div class="hr hr_ctg" style="text-align: center;">
                                Спорт
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=""  class="categories_button">
                            <div class="hr hr_ctg" style="text-align: center;">
                                Киберспорт
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=""  class="categories_button">
                            <div class="hr hr_ctg" style="text-align: center;">
                                Исскуство
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="rooms">
                <ol>
                    <?php 
                        $mysql = new mysqli('localhost', 'root', '', 'sgroup');
                        $rooms = $mysql->query("SELECT * FROM `room`");
                        foreach($rooms as $room) {
                            echo '<li><ul  class="room">';
                            echo '<li><div>'.$room['name'].'</div></li>';
                            echo '<li><div>'.$room['discription'].'</div></li>';
                            echo '<li><div>'.$room['max_player'].' игрока'.'</div></li>';
                            echo '</ul></li>';
                        }
                    ?>
                </ol>
            </div>
        </div>
    </div>
</body>
</html>