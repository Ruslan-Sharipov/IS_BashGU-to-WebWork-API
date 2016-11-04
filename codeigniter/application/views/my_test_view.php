<html>
<head>
<title>my test</title>
</head>
<body>
<h1>Welcome to my test!</h1>
<form action="my_test/hidden_handler" method="POST">
Хотите посмотреть скрытый текст. Отправьте запрос отсюда: 
<input type="hidden" name="hidden_text" value="&#960;=3.14">
<input type="submit">
</form>
<br>
<form action="my_test/remote_handler" method="POST">
Хотите посмотреть скрытый текст удалённо. Отправьте запрос отсюда: 
<input type="submit">
</form>
</body>
</html>




