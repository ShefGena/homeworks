<?php
function getContent(){
	if(is_readable("messages.db")){                     // проверяет наличие файла messages.db и читабельность и разворичивает
	$f=file_get_contents("messages.db");
	$messages = unserialize($f);
	return $messages;
	}
}
function addContent($messages){
		if($_POST){														// если пользователь отправил новая переменная пост юзер нейм и месседж
	$newPost['userName']=htmlspecialchars($_POST['userName']);			// присваиваем значением из суперглобального массива с ключем 'userName
	$newPost['userMessage']=htmlspecialchars($_POST['userMessage']);	// htmlspecialchars ограничение для тегов внутри текста
	$messages[]=$newPost;												// новым элементом добавляем переменную нью пост файл
	$messagesDB=serialize($messages);									// сериализация массива
	file_put_contents("messages.db", $messagesDB);						// создание файла и запись из формы
	return $messages;
	}
}
function showContent($messages){
	if(isset($messages)){												 // если переменная существует
	//$messages = array_reverse($messages);
	$i = 0;
	$cens = ["bad", "worst", "ugly"];									// проверка на плохые слова
	foreach($messages as $post){
		$i++;
		foreach($cens as $word){
			$post["userName"]=str_replace($word, 'CENSORED', $post['userName']); 
			$post["userMessage"]=str_replace($word, 'CENSORED', $post['userMessage']); 
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
	}
?>