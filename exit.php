<?php 

setcookie('user', $user['name'], time() - 3600, "/");
setcookie('id_user', $user['id'], time() - 3600, "/");
header('Location: main.html');

 ?>