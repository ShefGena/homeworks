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
	$newPost['userName']=strip_tags(($_POST['userName']), '<b></b>');			// присваиваем значением из суперглобального массива с ключем 'userName
	$newPost['userMessage']=strip_tags(($_POST['userMessage']), '<b></b>');	// htmlspecialchars ограничение для тегов внутри текста
	$messages[]=$newPost;												// новым элементом добавляем переменную нью пост файл
	$messagesDB=serialize($messages);									// сериализация массива
	file_put_contents("messages.db", $messagesDB);						// создание файла и запись из формы
	return $messages;
	}
}
function showContent($messages){
	if(isset($messages)){												 // если переменная существует
	$messages = array_reverse($messages);
	$cens = ["bad", "worst", "ugly"];									// проверка на плохые слова
	foreach($messages as $post){
		foreach($cens as $word){
			$post["userName"]=str_replace($word, 'Некорректное имя', $post['userName']); 
			$post["userMessage"]=str_replace($word, 'Некорректный комментарий', $post['userMessage']); 
		}
		echo "<p>Пользователь {$post["userName"]} пишет: {$post["userMessage"]}</p>";
		}
	}
}
?>