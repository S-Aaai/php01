<!-- post copy.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POST練習</title>
</head>
<body>
	<form action="write copy.php" method="post"> 
		お名前: <input type="text" name="name"><br>
		EMAIL: <input type="text" name="mail"><br>

		<label for="">花粉症ですか</label>
		<select name="pollen">
			<option value="">--Please choose an option--</option>
			<option value="yes">はい</option>
			<option value="no">いいえ</option>
		</select>

		<label for="">日常生活の支障度</label>
		<select name="level">
			<option value="">--Please choose an option--</option>
			<option value="0">差支えなし</option>
			<option value="1">日中だけ少し辛い</option>
			<option value="2">昼夜問わず少し辛い</option>
			<option value="3">辛い、仕事に影響</option>
			<option value="4">重度、十分な睡眠が取れない</option>
		</select>

		<input type="submit" value="送信">
	</form>

	<ul>
		<li><a href="indexx.php">indexx.php</a></li>
	</ul>


</body>
</html>