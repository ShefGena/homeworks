<?php
 session_start();
 if($_SESSION['user']!='logged'){
	header("Location: /sql/login.php");
 }
 error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	<link href="css/style.css" rel="stylesheet">
    <title>Информация о товаре</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/sql/logout.php">Выйти из учетной записи</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
	  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <p class="list-group-item active">Сортировать товар по:</p>
            <a href="?order_by_price=down" class="list-group-item">Цена ▲</a>
            <a href="?order_by_name=A-Z" class="list-group-item">A-Z</a>
            <a href="?order_by_name=Z-A" class="list-group-item">Z-A</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Приветствуем Вас на нашем сайте!</h1>
          </div>
		</div><!--/.col-xs-12.col-sm-9-->
      </div><!--/row-->
		 <div class="row"> 
<? 
 include_once("config.inc.php");

 /*
 $sql = "SELECT * FROM products WHERE is_active=1 ORDER BY id DESC";
 $res =mysqli_query($link, $sql);
 $row = mysqli_fetch_assoc($res);
 $items = [];
 while($row = mysqli_fetch_assoc($res)){
	 $items[] = $row;
}
*/
	 
function order_by_price(){
	if (isset($_GET['order_by_price'])){
	   if ($_GET['order_by_price'] =="down"){$sq = "  ORDER BY price ";}
	}
	return ($sq);
}


function order_by_name(){
	if (isset($_GET['order_by_name'])){
	   if ($_GET['order_by_name'] =="A-Z"){$sq = "  ORDER BY  name ";}
	    if ($_GET['order_by_name'] =="Z-A"){$sq = "  ORDER BY name DESC ";}
	}else{
		$sq = "  ORDER BY id DESC ";
	}
	return ($sq);
}

function SELECT ($link,$sq){  // выборка по параметрам
	$sql = "SELECT * FROM products WHERE is_active ='1'  $sq  ";	
    $res = mysqli_query($link, $sql);
	$items = [];
    while ($row = mysqli_fetch_assoc($res)){
        $items[] = $row;
    } 
    return ($items);	
}

if(isset($_GET['order_by_price'])){
	$sq = order_by_price();
	}elseif(isset($_GET['order_by_name'])){
		$sq = order_by_name();
		}else{$sq = "  ORDER BY id DESC ";}
$items = SELECT ($link,$sq);



foreach($items as $item){
	?>
			<div class="col-lg-4">
				<div class="product_fon">
				  <h2><?=$item['name']?></h2>
				  <span  ><b>Товар №<?=$item['id']?></b>. Производитель: <b><?=$item['vendor']?></b>.</span>
				  <p><b>Описание:</b> <?=$item['description']?></p>
				  <center><img src="<?= $item['image'];?>" width="200" height="222" hspace="4" vspace="4" border="1"></center>
				  <p>Цена: <?=$item['price']?> ¥</p>
				</div><!--/.col-xs-6.col-lg-4-->
            </div><!--/.col-xs-6.col-lg-4-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
<?php
}
?>
       </div><!--/row-->
    </div><!--/.container-->
  </body>
</html>
