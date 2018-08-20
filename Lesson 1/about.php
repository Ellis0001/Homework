<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Эллис – Работник баз данных</title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
     
	<h1>Страница пользователя Эллис</h1>
  <?php
   $userName = 'Эллис';
	$Age = 29;
	$userEmail = 'supersonya007@gmail.com';
	$userCity = 'Жуковский';
	$userAboutmyself = 'Работник баз данных';
	if ($userName){
	?>
		<dl>
            <dt>Имя</dt>
            <dd><?php echo $userName; ?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?php echo $Age; ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><?php echo $userEmail; ?></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?php echo $userCity; ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?php echo $userAboutmyself; ?></dd>
        </dl>
		<?php } else { ?>
	   <div> <h2> Пользователь не найден </h2>
	   <?php } ?>
    </body>
</html>

