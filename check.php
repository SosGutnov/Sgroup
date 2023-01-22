<?php 

$mysql = new mysqli('localhost', 'root', '', 'sgroup');

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); // Удаляет все лишнее и записываем значение в переменную //$login
$name = filter_var(trim($_POST['name1'] . " " . $_POST['name2']), FILTER_SANITIZE_STRING);
$tel_number = filter_var(trim($_POST['tel_number']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); 
$age = filter_var(trim($_POST['age']), FILTER_SANITIZE_STRING); 

if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
	echo '<script>alert("Недопустимая длина логина")</script>';
	exit();
}
else if(mb_strlen($name) < 5){
	echo '<script>alert("Недопустимая длина имени.")</script>';
	exit();
} 
else if($age < 12 || $age > 100){
	echo '<script>alert("Недопустимый возраст.")</script>';
	exit();
}

$pass = md5($pass."sos"); // Создаем хэш из пароля

$result1 = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив

if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}

$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`,`tel_number`, `age`)
	VALUES('$login', '$pass', '$name', '$tel_number', '$age')");

$mysql->close();

header('Location: page.php');

?>