<?php 

function getFileData($filePath) {
    if (!file_exists($filePath)) {
        exit("File $filePath does't exist");
    }
    $fileData = file_get_contents($filePath);
    if ($fileData === false) {
        exit("Have some problem with reading $filePath");
    }
    return $fileData;
}
function getDataFromJson($jsonPath) {
    $dataJson = getFileData($jsonPath);
    $data = json_decode($dataJson, true);
    if (!$data) {
        exit("Problems with reading $jsonPath");
    }
    return $data;
}
function getFileList($options) {
    if (!isset($options)) {
      exit('Options not transferred');
    } elseif (empty($options)) {
      exit('Options empty');
      
    } elseif (empty($options['targetDir'])) {
      exit('Wrong target dir');
    }
    $targetDir = $options['targetDir'];
    $returnCount = $options['returnCount'];
    $dir = opendir($targetDir);
    $list = [];
    while($file = readdir($dir)){
        if($file == '.' || $file == '..' || is_dir($targetDir . $file)){
            continue;
        }
        $list[] = $file;
    }
    if ($returnCount) {
      return count($list);
    }
    return $list;
}
function checkLogin($postData = [], $usersData) {
    $login = '';
    $password = '';
    $result = [
        'userdata' => [],
        'errors' => [],
    ];
    if (!empty($postData['login'])) {
        $login = $postData['login'];
    }
    if (!empty($postData['password'])) {
        $password = $postData['password'];
    }
    if ($login && !$password) {
        $result['userdata']['login'] = $login;
        
    } else if ($login && $password) {
        foreach ($usersData as $user) {
            if ($user['login'] === $login && $user['password'] === $password) {
                $result['userdata'] = $user;
                
            } else if ($user['login'] === $login && $user['password'] !== $password) {
                $result['errors'][] = 'Пароль не верный пароль!';
            }
        }
    } else if (!$login) {
        $result['errors'][] = 'Логин - обязательное поле!';
    }
    return $result;
}
session_start();
if (!empty($_COOKIE['access']) && $_COOKIE['access'] === 'deny') {
    http_response_code(403);
    exit('Подождите часок, мы вас заблокировали, а затем попробуйте снова');
}
if (empty($_SESSION['userdata'])) {
  http_response_code(403);
  exit('В доступе отказано из-за авторизации');
}
if (isset($_FILES['testfile']) && !empty($_FILES['testfile'])) {
    $fileType = $_FILES['testfile']['type'];
    $tmpPath = $_FILES['testfile']['tmp_name'];
    if ($fileType !== 'application/json') {
      exit('File not instance of json. Please upload another file.');
    }
    $id = getFileList(['targetDir' => $testsDir, 'returnCount' => true]);
    $fileName = 'Test' . ++$id . '.json';
    
    move_uploaded_file($tmpPath, $testsDir . $fileName);
    header('location: ./list.php');
    exit();
}
?>


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
	 header('location: ./list.php');
exit();
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