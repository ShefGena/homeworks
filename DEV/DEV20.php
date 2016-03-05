<?php
header('Content-Type: text/html; charset=utf-8');
$book_1 = array(
								'Author' => 'Leontiev Anton',
								'Name' => 'Тайный приют олигарха',
								'Style' => 'Детектив',
								'Price' => '30 грн.'
								);
$book_2 = array(
								'Author' => 'Кинг Стивен',
								'Name' => 'Стрелок',
								'Style' => 'Героическая фантастика',
								'Price' => '40 грн.'
								);
$book_3 = array(
								'Автор' => 'Зверев Сергей',
								'Name' => 'Другие. Восстание потерянных',
								'Style' => 'Героическая фантастика',
								'Price' => '0 грн'
								);
$book_4 = array(
								'Author' => 'Буинова Светлана',
								'Name' => 'Я',
								'Style' => 'Любовный роман',
								'Price' => '130 грн'
								);
$book_5 = array(
								'Author' => 'Лифшиц Михаил',
								'Name' => 'Собрание сочинений в двух томах. Том первый',
								'Style' => 'Проза',
								'Price' => '30 грн'
								);
$booksShop = array('Книга 1' => $book_1, 'Книга 2' => $book_2, 'Книга 3' => $book_3, 'Книга 4' => $book_4, 'Книга 5' => $book_5);
echo '<pre>';
print_r($booksShop);
echo '</pre>'; 
?>