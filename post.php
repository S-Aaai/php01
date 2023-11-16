<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POST練習</title>
</head>
<body>
	<form action="write.php" method="post"> 
		お名前: <input type="text" name="name">
		EMAIL: <input type="text" name="mail">
		年齢: <input type="text" name="age">
		<input type="radio" name="answer" value="0">
		<input type="radio" name="answer" value="1">

		<input type="submit" value="送信">
	</form>
	<ul>
		<li><a href="index.php">index.php</a></li>
	</ul>









</body>
</html>