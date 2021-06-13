
<html>
<head>
	<meta charset="utf-8">
	<title>アンケートフォーム</title>
	<link rel="stylesheet" type="text/css" href="./input.css">
</head>

<h1>アニメアンケート集計</h1>

<body>

	<form action="write.php" method="post">
	    <table id="na" border="1">
		<tr>
		<td>お名前</td> <td><input type="text" name="name"></td><br>
		</tr>
		<tr>
		<td>Eメール</td> <td><input type="text" name="mail"></td><br>
		</tr>
		</table>
		<div id = "sex">
		男性：<input type="checkbox" name="sex[]" value="男性">
		女性：<input type="checkbox" name="sex[]" value="女性">
		</div>
		<div id ="a">
		<p> 好きなアニメ：</p> <br> <input id="anime" type="text" name="anime">
		</div>
		<div id="s">
		<p> 好きな声優：</p><br> <input id="seiyu" type="text" name="seiyu">
		</div>
		<input type="submit" value="送信">
	</form>

</body>
</html>