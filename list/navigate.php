<?php
define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
$curdir = ROOT;
echo "<a href=/list/navigate.php><p>ROOT</p></a>";
if(isset($_GET['curdir'])){
	$curdir = $_GET['curdir'];
}
$parent = dirname($curdir);	
echo "<a href=/list/navigate.php?curdir=$parent><p>Parrent directory</p></a>";	
			
if($_GET['curdir']){
	$curdir = $_GET['curdir'];
}
$files = scandir($curdir);
foreach($files as $name){
	if(($name!='.') AND ($name!='..')){
	if(is_dir($name)){
		$type = "Directory";
	}else{
		$type = "File";
	}
	echo "<a href=?curdir=".$curdir.DS."$name><p>$type - $name</p></a>";				
}
}
?>