<?php
if(isset($_POST['name1'])) {
	$name = trim(urldecode(htmlspecialchars($_POST['name1'])));
	$mail = trim(urldecode(htmlspecialchars($_POST['mail'])));
	$phone = trim(urldecode(htmlspecialchars($_POST['phone1'])));
	$myMail = ($mail == "" ? "" : "Моя электронная почта: ".$mail.". ");
	$subject = "=?utf-8?B?".base64_encode("Путешествие!")."?=";
	$headers = "From tavor.max@gmail.com\r\nReply-to: tavor.max@gmail.com\r\nContent-type:text/plain; chahset=utf-8\r\n";
	if (mail("php123testmail@gmail.com", $subject, "Пожалуйста, подберите мне тур! Меня зовут $name. $myMail, мой телефонный номер: $phone", $headers)) echo "Ваш запрос отправлен, ожидайте звонка!";
} elseif(isset($_POST['name2'])) {
	$name = trim(urldecode(htmlspecialchars($_POST['name2'])));
	$phone = trim(urldecode(htmlspecialchars($_POST['phone'])));
	$subject = "=?utf-8?B?".base64_encode("Путешествие!")."?=";
	$direct = $_POST['f2'];
	$wantTo = ($direct == 'Я пока не определился(лась) с направлением' ? '' : $direct);
	$headers = "From tavor.max@gmail.com\r\nReply-to: tavor.max@gmail.com\r\nContent-type:text/plain; chahset=utf-8\r\n";
	if (mail("php123testmail@gmail.com", $subject, "Я хочу поехать в: ".$wantTo.". Меня зовут ".$name." а мой номер телефона: ".$phone, $headers)) echo "Ваш запрос отправлен, ожидайте звонка!";
} elseif (isset($_POST['name3'])) {
	$name = trim(urldecode(htmlspecialchars($_POST['name3'])));
	$phone = trim(urldecode(htmlspecialchars($_POST['phone3'])));
	$subject = "=?utf-8?B?".base64_encode("Путешествие!")."?=";
	$headers = "From tavor.max@gmail.com\r\nReply-to: tavor.max@gmail.com\r\nContent-type:text/plain; chahset=utf-8\r\n";
	if (mail("php123testmail@gmail.com", $subject, "Здравствуйте! Меня зовут $name, я хочу уточнить некоторые детали по поводу действующих акций. Мой телефонный номер: $phone", $headers)) echo "Ваш запрос отправлен, ожидайте звонка!";
}
?>