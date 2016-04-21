<?php
function UPDATE_INSERT ($a,$link){
  if(isset($_POST['id'])){  // добавление или редактирование
         $id = $_POST['id'];
		 }else{
		  $id = "";
		  }	
		$t = date("Y-m-d H:i:s");
		if($_FILES['filename']['error'] == 0){
			print_r($_FILES);
			move_uploaded_file($_FILES['filename']['tmp_name'], "upload/".date("His").$_FILES['filename']['name']);
			$filename="upload/".date("His").$_FILES['filename']['name'];
			//print_r($_FILES);
			//print_r($_FILES['filename']['error']);
			}else{
   // echo 'пустой';print_r($_FILES);
	  if ($id != ""){
		$filename = $_POST['image']; }  // если редактирование
	  else{
		  $filename = 'default.jpg';}  // если добавление
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
	
 
?>