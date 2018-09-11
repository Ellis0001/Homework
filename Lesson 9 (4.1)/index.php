/* Примемр Для ДЗ */

<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=shop', 'root', '');
    foreach($dbh->query('SELECT * from books') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

<?php
/*
define ('DB_DRIVER','mysql');
define ('DB_HOST','localhost');
define ('DB_NAME','shop');
define ('DB_USER','root');
define ('DB_PASS','');

try

{
	//$connect_str = DB_DRIVER . ':host='. DB_HOST . ';dbname=' . DB_NAME;

	//$db = new PDO($connect_str, DB_USER, DB_PASS);
	
	$pdo=new PDO('mysql:host=localhost;dbname=netology4.1, charset=utf8','root','');
	$sth=$dbh->prepare("SELECT * FROM shop");
	$sth->execute();
	print ("Извлечние всех оставшихся строк результирующего набора:\n");
	
	$result=$sth->fetchAll(PDO::FETCH_ASSOC);
	
	print_r($result);
}

catch(PDOException $e){
	
	die ("Error")
	
}
	


/*<?php
include "config.php";
$sql = "select*from shop";

$res = mysqli_query ($connect, $sql);

while ($data=mysqli_fetch_assoc($res)) {
	echo "Автомобиль ".$data['name']." стоит ".$data['price']. "<br>";
	
	
}

echo "Hello";

?>


<?php

//PDO Method

$sql ="SELECT * FROM shop WHERE name = ? & age = ?";

//Чтобы запросить студента с именем Вася из PHP

$stmt = $pdo->prepare($sql);
$stmt->execute(["Вася", 25]);
$vasya = $stmt->fetch();

//Более безопасно, Защищает от PHP инъекций

$id = (int)$_GET[id];

//Защита от js инъекций
strip_tags($_GET[NAME])

// Именованные плейс холдеры

$sql ="SELECT * FROM shop WHERE name = :name";



$stmt = $pdo->prepare($sql); , PDO::int
$stmt->execute(["name" => "Вася"]);
$vasya = $stmt->fetch();

//Для ДЗ

<?php


$sth = $db->prepare("SELECT fio, age FROM students");
$sth->execute();
/* Извлечение всех оставшихся строк результирующего набора*/
/*print ("Извлечение всех оставшихся строк результирующего набора:\n");
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
?>*/












