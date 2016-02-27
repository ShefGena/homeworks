<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Регистрационная форма</title>
	<style type="text/css">
   #layer1 {	
	 width:40%;
	 padding-left:25px;
	 padding-right:25px;
	 float:right; 
	 background-color:#5F9EA0;
	 color:white;
	 font-style:italic;
	 -moz-border-radius: 5px;
	 -webkit-border-radius: 5px;
	  border-radius:10px 10px 0 10px;
   background-position:top center; 
   background-repeat:no-repeat; 
   text-align: justify; 
	 word-wrap: break-word;

   }
   #layer2 {
   width:40%;
   clear:both;
	 	 
   background-color:#3CB371;
	 font-style:italic;
	 padding-left:25px;
	 padding-right:25px;
	 padding-top :5px;
   color:white; 
   -moz-border-radius: 5px; 
   -webkit-border-radius: 5px;
    border-radius: 10px 10px 10px 0; 
  background-position:top center;
  background-repeat:no-repeat;
  text-align: justify;
	word-wrap: break-word;

  }
   </style>
</head>
<body>
	<form method="POST" action="index.php">
		<p>Введите свое имя</p>
		<input type="text" name="userName" placeholder="Введите name"/>
		<p>Оставьте свое сообщение</p>
		<textarea name="userMessage" rows="7" cols="35"></textarea>
		<br>
		<p>Добавить слово в антимат:</p>
		<input type="text" name="antiMat" placeholder="Введите пожалуйста матюк"/>
		<br>
		<p>Удалить слово с антимата:</p>
		<input type="text" name="delMat" placeholder="Введите пожалуйста матюк"/>
		<br>
		<br>
		<input type = "submit" value="Отправить форму" name="submit"/>
	</form>
<?php
echo '<pre>';

	if(is_readable("messages.db")){                     // проверяет наличие файла messages.db и читабельность и разворичивает
	$f=file_get_contents("messages.db");
	$messages = unserialize($f);
	}


if(is_readable("mat.db")){
	$m = file_get_contents("mat.db");
	$mat = unserialize($m);
	}
$cnt = count($mat);
for($s=0; $s<=$cnt; $s++){
	$matyk[] = $mat[$s]['antiMat'];
	}
$matyk1=array_unique($matyk);	



if(is_readable("delmat.db")){											// ////////////////////////
	$d = file_get_contents("delmat.db");
	$delToMat = unserialize($d);
	}
$cnt1 = count($delToMat);
for($z=0; $z<=$cnt1; $z++){
	$antimatyk[] = $delToMat[$z]['delMat'];
	}
$matyk2=array_unique($antimatyk);

//$matyk3 = (array_uintersect($matyk2, $matyk1, strcasecmp));
$result = array_diff($matyk1, $matyk2);
print_r($matyk1);
print_r($matyk2);
//$result = (array_uintersect($matyk2, $matyk1, strcasecmp));
print_r($result);
foreach($result as $h){
	unset($h);
	print_r($h);
}





	if($_POST){														// если пользователь отправил новая переменная пост юзер нейм и месседж
	$newPost['userName']=htmlspecialchars($_POST['userName']);			// присваиваем значением из суперглобального массива с ключем 'userName
	$newPost['userMessage']=htmlspecialchars($_POST['userMessage']);	// htmlspecialchars ограничение для тегов внутри текста
	$messages[]=$newPost;												// новым элементом добавляем переменную нью пост файл
	$messagesDB=serialize($messages);									// сериализация массива
	file_put_contents("messages.db", $messagesDB);						// создание файла и запись из формы
	$newMat['antiMat']=htmlspecialchars($_POST['antiMat']);
	$mat[] = $newMat;
	$matDB = serialize($mat);
	file_put_contents("mat.db", $matDB);
	$delMat['delMat']=htmlspecialchars($_POST['delMat']);
	$delToMat[] = $delMat;
	$delToMatDB = serialize($delToMat);
	file_put_contents("delmat.db", $delToMatDB);
	}

if(isset($messages)){												 // если переменная существует
$messages = array_reverse($messages);
$i = 0;
foreach($messages as $post){
	$i++;
	foreach($result as $word){
		$post["userName"]=str_ireplace($word, 'CENSORED', $post['userName']); 
		$post["userMessage"]=str_ireplace($word, 'CENSORED', $post['userMessage']); 
		}
if($i%2==0){
		echo '<div id="layer1">';
		echo "<p>Пользователь {$post["userName"]} пишет: </p>";
		echo "<p>{$post["userMessage"]}</p>".'<br>';
		echo '</div>';
		}else{
			echo '<div id="layer2">';
			echo "<p>Пользователь {$post["userName"]} пишет: </p>";
			echo "<p>{$post["userMessage"]}</p>".'<br>';
			echo '</div>';
			}		
		}
	}
	
?>