
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test list</title>
</head>
<body>

  <h1>Список тестов:</h1>
  
  <ul>
  <?php>$list = glob('Tests/*.json');
 
 foreach($list as $i => $v) {
     $name = basename($v);
     echo "Number ",  1+$i, "  ",$name,"  ", "</br>"; 
 }
 ?>
  </ul>

</body>
</html>