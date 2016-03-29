<?php
 session_start();
 if($_SESSION['user']!='logged'){
	header("Location: /sql/login.php");
 }
 error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
 echo '<pre>';
 include_once("config.inc.php");
 $sql = "SELECT * FROM products WHERE is_active=1 ORDER BY id DESC";
 $res =mysqli_query($link, $sql);
 $row = mysqli_fetch_assoc($res);
 $items = [];
 while($row = mysqli_fetch_assoc($res)){
	 $items[] = $row;
 }
?>
<a href="/sql/logout.php">Выйти из учетной записи</a>

<?php
foreach($items as $item){
	?>
	<form action = "" method = "POST" style="float:left; height:480px; width:290px; border:1px solid black">
		ID: <?=$item['id']?><br>
		NAME: <?=$item['name']?><br>
		description<br>
		<input type="text" name = "description" value = "<?=$item['description']?>"><br>
		price: <?=$item['price']?><br>
		image<br>
		<input type="text" name = "image" value = "<?=$item['image']?>">
		<p> Время последнего изменения:<br>  <?=$item['date']?> </p>
		is_active: <?=$item['is_active']?><br>
		vendor: <?=$item['vendor']?><br>
	</form>
<?php
}

