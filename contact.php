<?php
	$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = $_POST['human'];
    $type = $_POST['type'];
    $from = 'From: [' + $name + ']';
    $to = 'ftng-2015@mail.ru';
    $subject = 'Обратная связь';
    $body = "От: $name ($type)\nE-Mail:$email\nСообщение: $message\n";
	
	if ($_POST['submit']) {
	    if ($name != '' && $email != '') {
	        if ($human == '4') {	
	            if (mail ($to, $subject, $body, $from)) {
	        		echo 'Ваше сообщение было успешно отправлено!';
	    		} else {
	        		echo 'Произошла ошибка';
	    		}
			} else if ($_POST['submit'] && $human != '4') {
	    		echo 'Вы не прошли анти-спам проверку';
			}
	    } else {
	        echo 'Заполните все необходимые поля';
	    }
	}
	else {
		echo 'oy';
	}
?>
