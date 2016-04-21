<?php
 session_start();
 if($_SESSION['user']!='logged'){
	 header("Location: /sql/login.php");
 }
 error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
 echo '<pre>';
 include_once("config.inc.php");
 
 
 function UPDATE_INSERT ($a,$link){
  if(isset($_POST['id'])){  
         $id = $_POST['id'];
		 }else{
		  $id = "";
		  }	
		$t = date("Y-m-d H:i:s");
		if($_FILES['filename']['error'] == 0){
			//print_r($_FILES);
			move_uploaded_file($_FILES['filename']['tmp_name'], "upload/".date("His").$_FILES['filename']['name']);
			$filename="upload/".date("His").$_FILES['filename']['name'];
			}else{if ($id != ""){
		$filename = $_POST['image']; }  // если редактир. существующий id
	  else{
		  $filename = 'default.jpg';}  // если добавляем
    }
		if ($id > 0){
			$id = "WHERE id=$id";
			}else{
				$id = "";
				}
						
			$sql = "$a products SET
			`name` = '{$_POST['name']}',
			description = '{$_POST['description']}',
			price = '{$_POST['price']}',
			image = '{$filename}',
			is_active = '{$_POST['is_active']}',
			vendor = '{$_POST['vendor']}',
			date = '{$t}' $id";
			$res = mysqli_query($link, $sql);
			}
	
 
 if ($_POST){
    if (isset($_POST['id'])) {
		$a = "UPDATE";	
    } else {
		$a = "INSERT";  
    }
UPDATE_INSERT ($a,$link);
}
 
 
 $sql = "SELECT * FROM products ORDER BY id DESC";
 $res =mysqli_query($link, $sql);
 $row = mysqli_fetch_assoc($res);
 $items = [];
 while($row = mysqli_fetch_assoc($res)){
	 $items[] = $row;
 }

?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<button type="button" class="btn btn-warning"><a href="/sql/logout.php">Выйти из учетной записи</a></button>
<form action = "" method = "POST" style="height:430px; width:290px; border:1px solid black">
		NAME<br>
		<input type="text" name = "name" >
		description<br>
		<input type="text" name = "description" >
		price<br>
		<input type="text" name = "price" >
		image<br>
		<input type="file" multiple="multiple" name="filename[]">
		is_active<br>
		<input type="text" name = "is_active" >
		vendor<br>
		<input type="text" name = "vendor" >
		<input type = "submit" value = "edit">
	</form>
<?php

foreach($items as $item){
	
	?>
	<form action = "" method = "POST" enctype = 'multipart/form-data' style="float:left; height:760px; width:400px; border:1px solid black">
		ID<br>
		<input type="text" name = "id" value = "<?=$item['id']?>">
		NAME<br>
		<input type="text" name = "name" value = "<?=$item['name']?>">
		description<br>
		<input type="text" name = "description" value = "<?=$item['description']?>">
		price<br>
		<input type="text" name = "price" value = "<?=$item['price']?>"><br>
		<input type="file" multiple="multiple" name="filename">
		<center>
		<input type="hidden" name="image"  value = "<?=$item['image']?>" >
		<p><img src="<?= $item['image'];?>" width="100" height="111" hspace="4" vspace="4" border="1"></p>
		<p>  Время последнего изменения:<br>  <?=$item['date']?> </p>
		</center>
		is_active<br>
		<input type="text" name = "is_active" value = "<?=$item['is_active']?>">
		vendor<br>
		<input type="text" name = "vendor" value = "<?=$item['vendor']?>">
		<input type = "submit" value = "edit">
	</form>
<?php
}
print_r($_POST);
