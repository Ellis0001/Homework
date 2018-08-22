   <?php
require_once('APIConfiguration.php');
// Проверка корректного ответа сервера
$headers = get_headers($url);
$ResponseStatusCode = (int) explode(' ', $headers[0])[1];
if ($ResponseStatusCode < 200 || $ResponseStatusCode > 299) {
    exit("Не корректный код ответа сервера: $ResponseStatusCode");
}
$responseJSON = file_get_contents($url);

if ($responseJSON !== false) {
    $responseArray = json_decode($responseJSON, true);
} else {
    exit('Невозможно получить данные с сервера');
}

//print_R($responseArray);

if ($responseArray === null) {
    exit('Ошибка декодирования json');
}?>
<?php echo (!empty($responseJSON->main->temp_max)) 
? round($responseJSON->main->temp_max - 299) : 'не удалось получить температуру' ; ?>
<?php

$weather = $responseArray['weather'][0]['main'];
$temp = $responseArray['main']['temp'];
$windSpeed = $responseArray['wind']['speed'];
$windDeg = $responseArray['wind']['deg'];
$responseData = [];
$responseData[] = labelDataFactory('Погода', $weather);
$responseData[] = labelDataFactory('Температура по Фаренгейту', $temp);
$responseData[] = labelDataFactory('Ветер (скорость)', $windSpeed);
$responseData[] = labelDataFactory('Ветер (направление)', $windDeg);
function taginator($tagname, $data,  $label = '') {
    if (empty($data)) {
        return;
    }
    echo "<$tagname>";
    
    if ($label) {
        echo "$label";
    }
    if (($tagname === 'ol' || $tagname === 'ul') && gettype($data) === 'array') {
        foreach ($data as $dataPice) {
            if (empty($dataPice)) {
                break;
            }
            echo '<li>', $dataPice['label'], ': ', $dataPice['data'], '</li>';
        }
    } else {
      echo $data;
    }
    echo "</$tagname>";
}
function labelDataFactory($label, $data) {
    if (empty($data)) {
        return;
    }
    return [
        'label' => $label,
        'data' => $data,
    ];
}
?>
   
   
  <!DOCTYPE html>
   <html lang="ru">
    <head>
        <title>Мой прогноз погоды</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
</head>
<body>
    <?php
        taginator('h2', $responseArray['name'], 'Город: ');
        taginator('ul', $responseData);
    ?>
</body>
</html>


