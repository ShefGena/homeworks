<?php
 session_start();
 if($_SESSION['user']!='logged'){
	 header("Location: /sql/login.php");
 }
 error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
 echo '<pre>';
 include_once("config.inc.php");
if($_POST){
	$a = date("Y-m-d H:i:s");
	foreach($_FILES['filenames']['name']as $k=>$name){
				if(getimagesize($_FILES['filenames']['tmp_name'][$k])){
				$img2 = $_FILES['filenames']['name'];	
				$img = $img2[0];
				move_uploaded_file($_FILES['filenames']['tmp_name'][$k], 'upload/'.$name);	
		}
	}
	print_r($img);
	
	if(isset($_POST['id'])){
	$sql = "UPDATE products SET
		`name` = '{$_POST['name']}',
		description = '{$_POST['description']}',
		price = '{$_POST['price']}',
		image = '{$img}',
		is_active = '{$_POST['is_active']}',
		vendor = '{$_POST['vendor']}',
		date = '{$a}' WHERE id = '{$_POST['id']}'
		";
		$res = mysqli_query($link, $sql);
}else{
	$sql = "INSERT products SET
		`name` = '{$_POST['name']}',
		description = '{$_POST['description']}',
		price = '{$_POST['price']}',
		image = '{$img}',
		is_active = '{$_POST['is_active']}',
		vendor = '{$_POST['vendor']}',
		date = '{$a}'
		";
		$res = mysqli_query($link, $sql);

}
}
 $sql = "SELECT * FROM products ORDER BY id DESC";
 $res =mysqli_query($link, $sql);
 $row = mysqli_fetch_assoc($res);
 $items = [];
 while($row = mysqli_fetch_assoc($res)){
	 $items[] = $row;
 }
?>
<a href="/sql/logout.php">Выйти из учетной записи</a>
<form action = "" method = "POST" style="height:430px; width:290px; border:1px solid black">
		NAME<br>
		<input type="text" name = "name" >
		description<br>
		<input type="text" name = "description" >
		price<br>
		<input type="text" name = "price" >
		image<br>
		<input type="text" name = "image" >
		is_active<br>
		<input type="text" name = "is_active" >
		vendor<br>
		<input type="text" name = "vendor" >
		<input type = "submit" value = "edit">
	</form>
<?php
foreach($items as $item){
	?>
	<form action = "" method = "POST" enctype = 'multipart/form-data' style="float:left; height:600px; width:400px; border:1px solid black">
		ID<br>
		<input type="text" name = "id" value = "<?=$item['id']?>">
		NAME<br>
		<input type="text" name = "name" value = "<?=$item['name']?>">
		description<br>
		<input type="text" name = "description" value = "<?=$item['description']?>">
		price<br>
		<input type="text" name = "price" value = "<?=$item['price']?>"><br>
		<input type="file" multiple="multiple" name="filenames[]">
		<br>
		<input type="text" name = "image" value = "<?=$item['image']?>">
		<p>  Время последнего изменения:<br>  <?=$item['date']?> </p>
		is_active<br>
		<input type="text" name = "is_active" value = "<?=$item['is_active']?>">
		vendor<br>
		<input type="text" name = "vendor" value = "<?=$item['vendor']?>">
		<input type = "submit" value = "edit">
	</form>
<?php
}

