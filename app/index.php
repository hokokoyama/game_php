<html>
<head>
<title>TOP</title>
<body>

<?php
require_once 'top.php';

//クラスの指定があるか
if(isset($_GET['mode'])){
	$mode = $_GET['mode'];
}

//メソッドの指定
if(isset($_GET['action'])){
	$action = $_GET['action'];
}

//クラスとメソッド呼び出し
if(isset($_GET['mode'])){
	$class = new $mode();
	$class->$action();
}
?>

<?php
if(!isset($_GET['mode']) && !isset($_GET['action']))
{
?>
<form action="#" method="post">
USERID<input type="text" name="uid"></br>
PASS<input type="text" name="pass"></br>
<input type="hidden" name="login" value="login"></br>
<input type="submit" value="login">
</form>
<a href="http://localhost/game/guild/app/?mode=Top&action=newEntry">新規登録</a>
<?php } ?>
</body>
</html>