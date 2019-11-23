<meta charset="utf-8">
<?php

$emailTheme = 'Запрос звонка по домам проекта "Светлый дом"';
//Отключение предупреждений и нотайсов (warning и notice) на сайте
// error_reporting( E_ERROR );
// создание переменных из полей формы		
if (isset($_POST['name'])) {
  $name      = $_POST['name'];
  if ($name == '') {
    unset($name);
  }
}
if (isset($_POST['phone'])) {
  $phone      = $_POST['phone'];
  if ($phone == '') {
    unset($phone);
  }
}
// if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
if (isset($name)) {
  $name = stripslashes($name);
  $name = htmlspecialchars($name);
}
if (isset($phone)) {
  $phone = stripslashes($phone);
  $phone = htmlspecialchars($phone);
}
$dateSend = date("d-m-Y H:i:s"); // Дата отправки
$address = "maiorova-tatsiana@mail.ru";// адрес почты куда придет письмо
// $address = "andpost2000@mail.ru";// адрес почты куда придет письмо
$headers    = "Content-type: text/html; charset=utf-8 \r\n";//хедер кодировка (Это важно)
$headers   .= "From: domsip.by";//хедер от кого
// текст письма 
// $note_text = "Тема : $emailTheme \r\n Имя : $name \r\n Телефон : $phone";
$note_text = "
<html>
<head>
  <title>$dateSend</title>
</head>
<body>
  <h1>Запрос звонка</h1>
  <div>
    Имя: <b>$name</b>
  </div>
  <div>
    Телефон: <b>$phone</b>
  </div>
</body>
</html>
";

if (isset($name)) {
  mail($address, $emailTheme, $note_text, $headers);
  // сообщение после отправки формы
  // echo "Уважаемый(ая) <b>$name</b> ваш запрос принят!";
}

?>