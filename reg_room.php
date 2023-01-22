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
            </ul>
        </header>
        <div class="side_reg">
            <form action="create_room.php" method="post">
            <ul class="side_bar_reg">
                <p class="clasP" style="font-size: 35px; margin-bottom: 20px;">Создание комнаты</p>
                <li>
                    <div>
                        <p class="clasP"  style="text-align:left; padding-left: 45px;">Название</p>
                    </div>
                    <input type="text" class="input_I"name="name_room">
                </li>
                <li>
                    <div>
                        <p class="clasP"  style="text-align:left; padding-left: 45px;">Описание</p>
                    </div>
                    <input type="text" class="input_I" name="discription_room">
                </li>
                <li>
                    <div>
                        <p class="clasP"  style="text-align:left; padding-left: 45px;">Дата проведения</p>
                    </div>
                    <input type="date" class="input_I" name="date_room1">
                </li>
                <li>
                    <div>
                        <p class="clasP"  style="text-align:left; padding-left: 45px;">Время проведения</p>
                    </div>
                    <input type="time" class="input_I" name="date_room2">
                </li>
                <li>
                    <div>
                        <p class="clasP"  style="text-align:left; padding-left: 45px;">Количество участников</p>
                    </div>
                    <input type="number" class="input_I" name="count_player_room" style="padding-right:10px; width:390px;">
                </li>
                <li>
                    <div>
                        <p class="clasP"  style="text-align:left; padding-left: 45px;">Место проведения</p>
                    </div>
                    <input type="text" class="input_I" name="address_room">
                </li>
                <button style="margin-bottom: 10px;">
                    Создать
                </button>
            </ul>
            </form>
        </div>
    </div>
</body>
</html>