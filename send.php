<?php
if (!empty($_POST['email'])){
    $theme = 'Подписка Snesut';
    $letter = 'Данные:';
    $letter .='Mail: '.$_POST['email'].'\r\n'; 
if (mail('photoandcars@yandex.ru', $theme, $letter)){
    echo "Вы подписаны";
} else {
echo "Ошибка при отправке!";
}
}else {
    echo "Заполните поле";
}