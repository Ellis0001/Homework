<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Задание к уроку "Строки, массивы и объекты" Часть 1 </title>
        <meta charset="utf-8">
    </head>
    <body>
     
 	<h1>Жестокое обращение с животными</h1>
       <h2>Выполнено Эллис</h2>


<?

$planet = array (
    "Africa" => array ("Okapia johnstoni", "Antilocapra americana", "Viverra","Cercopithecus"),
	
	"Europe" => array("Sciuromorpha","Cricetinae","Castor canadensis","Amynodontidae"),
	
	"Asia" => array ("Panthera leo persica","Panthera tigris","Rhinoceros unicornis"),
	
	"North America" => array ("Choeropsis liberiensis","Potamochoerus porcus"),
	
	"South America" => array ("Ursus","Canis ordinaria"),
	
	"Australia" => array ("Didelphimorphia","Proboscidea","Macroscelididae"),
	
	"Antarctida" => array ("Euphausia superba","Aptenodytes forsteri"),
	);

echo '<pre>';	
//print_r($planet);


//$result = [];
//foreach ($planet as $countinents) {
//    $result = array_merge($result, array_filter($countinents, function ($item){ return count(explode(' ', $item)) === 2; }) );
//};
//print_r($result);

 
   
  foreach ($planet as $continent => $ArrayOfAnimals) { 
      $splitContinents['source'][$continent] = []; 
   
      foreach ($ArrayOfAnimals as $animal) { 
          $TwoWordName = substr_count($animal, ' '); 
   
          if ($TwoWordName) { 
              list($FirstWord, $SecondWord) = explode(' ', $animal); 
               
              $splitContinents['source'][$continent][] = $FirstWord; 
              $splitContinents['data'][] = $SecondWord; 
          } 
      } 
  } 
   
  shuffle($splitContinents['data']); 
   
  foreach ($splitContinents['source'] as $continent => $firstWordsArray) { 
      echo '<h2>', $continent, '</h2>'; 
      $result = []; 
   
      foreach ($firstWordsArray as $FirstWord) { 
        if (count($splitContinents['data'])) { 
          $result[] = $FirstWord . ' ' . array_pop($splitContinents['data']); 
        } 
      } 
   
      echo '<p>', implode(', ', $result), '</p>'; 
  } 
   
 ?>

   </body>
</html>