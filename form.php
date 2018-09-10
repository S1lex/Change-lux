<?php require 'db.php';
$name = trim(urldecode(htmlspecialchars($_POST['name'])));
$phone = trim(urldecode(htmlspecialchars($_POST['phone'])));
$direct = $_POST['direct'];
if (mail("php123testmail@gmail.com", "Travel!", "I want to travel to ".$direct.", my name is ".$name." and phone: ".$phone)) {
	 echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки"; 
}
?>