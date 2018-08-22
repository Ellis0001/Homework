<?php
$link = 'http://api.openweathermap.org/data/2.5/weather';
$city = 'Moscow,ru';
$appid = '660af6150409657c340547bdfb859111';

$url="$link?q=$city&appid=$appid";

echo "Полученная ссылка: $url";