<?php 

$mysql = new mysqli('localhost', 'root', '', 'sgroup');

$name = filter_var(trim($_POST['name_room']), FILTER_SANITIZE_STRING);
$datetime = filter_var(trim($_POST['date_room1'] . " " . $_POST['date_room2']), FILTER_SANITIZE_STRING);
$discription = filter_var(trim($_POST['discription_room']), FILTER_SANITIZE_STRING); 
$address = filter_var(trim($_POST['address_room']), FILTER_SANITIZE_STRING); 
$count_player = filter_var(trim($_POST['count_player_room']), FILTER_SANITIZE_STRING); 
$id_creator = $_COOKIE["id_user"];

if(empty($name)){
	echo '<script>alert("Недопустимая длина названия")</script>';
	exit();
}
else if(empty($discription)){
	echo '<script>alert("Недопустимая длина описания.")</script>';
	exit();
}
else if(empty($address)){
	echo '<script>alert("Недопустимая длина адреса.")</script>';
	exit();
}
else if(empty($count_player)){
	echo '<script>alert("Недопустимое количество участников.")</script>';
	exit();
}
else if(empty($datetime)){
	echo '<script>alert("Недопустимое дата и время.")</script>';
	exit();
}

$mysql->query("INSERT INTO `room` (`id_creator`, `name`, `discription`,`max_player`, `address`, `date`)
	VALUES('$id_creator', '$name', '$discription', '$count_player', '$address', '$datetime')");

header('Location: page.php');

?>