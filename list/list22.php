<?php
header('Content-Type: text/html; charset=utf-8');
echo '<pre>';

$names = scandir(__DIR__);
foreach($names as $path){
	if(($path != '.') AND ($path != '..') AND (is_file($path))){
		echo "<a href=?filename=$path>$path</a>";
		echo '<br>';
		$files[] = $path;
	}
}

$dir1 = scandir(__DIR__);
foreach($dir1 as $dir2){
	if(!is_file($dir2) AND ($dir2 != '.') AND ($dir2 != '..') AND ($dir2 != '.git')){
		echo "<a href=?filename=$dir2>$dir2</a>";
		echo '<br>';
		$dir[] = $dir2;
	}	
}

if(isset($_GET['filename'])){ 																												// Имя файла когда наводим на него
	if(in_array($_GET['filename'], $files)){

?>	
<form action="" method="post">
	<p>Изменить содержимое файла:</p>
	<textarea name="file_edit" cols="50" rows="20"><?=file_get_contents($_GET['filename']);?></textarea>	
	<input type="hidden" name = "filename" value=<?=$_GET['filename'];?>>
	<input type="submit" name="edit">
</form>
<?php
if(isset($_POST['edit'])){								  // Если отправили запрос с формы
	file_put_contents($_POST['filename'], $_POST['file_edit']);
	
}
}
elseif((in_array($_GET['filename'], $dir))){
?>
<form action="" method="post">
  <p>Переименовать директорию:</p>
	<textarea name="file_name"><?=$_GET['filename'];?></textarea><br>	
	<input type="hidden" name = "filename" value=<?=$_GET['filename'];?>>
	<input type="submit" name="edits">
</form>
<?php	
}
if(isset($_POST['edits'])){								  // Если отправили запрос с формы
	rename($_POST['filename'], $_POST['file_name']);
}
}
?>
