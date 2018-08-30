

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tests uploader</title>
</head>
<body>


<form enctype="multipart/form-data" action="admin.php" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="30000">
<h2> Выберите файл с тестом в формате json : </h2> <br>
<input name="userfile" type="file">
<input type="submit" value="Send File">
</form>
  

  <?php
$uploaddir = __DIR__ . '/Tests/';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir .
    $_FILES['userfile']['name'])) {
    print "Файл загружен.";
} else {
    print "Ошибка";
}
?>
  <style>
    div {
      padding: 10px 0;
    }
  </style>
  
</body>
</html>