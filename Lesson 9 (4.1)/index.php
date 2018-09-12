<?php
include "config.php";
$sql = "SELECT `name`, `author` , `year`, `isbn`, `genre` FROM `books`";
$res = mysqli_query ($connect, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Библиотека</title>
</head>
<body>

<style>
    table { 
        border-spacing: 0;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }
    
    table th {
        background: #eee;
    }
</style>
<h1>Библиотека</h1>

<form method="GET">
    <input type="text" name="isbn" placeholder="ISBN" value="" />
    <input type="text" name="name" placeholder="Название книги" value="" />
    <input type="text" name="author" placeholder="Автор книги" value="" />
    <input type="submit" value="Поиск" />
</form>


<table>
    <tbody>
    <tr>
        <th>Название</th>
        <th>Автор</th>
        <th>Год выпуска</th>
        <th>ISBN</th>
        <th>Жанр</th>
    </tr>
    <?php
 
    $connection = mysqli_connect('localhost', 'root', '', 'books');
 
    if ( $connection == false)
    {
        echo 'Не удалось подключиться к базе данных books!<br>';
        echo mysqli_connection_error();
        die();
    } else {
        echo 'Мы подключились к БД "books"' . '<br>';
    }
 
 
    If(isset($_GET['isbn']) OR ($_GET['name']) OR ($_GET['author'])) {
        $requestISBN = "SELECT `name`, `author`, `year`, `isbn`, `genre` FROM `books` WHERE `isbn` LIKE '%" . $_GET['isbn'] . "%'
       AND `name` LIKE '%" . $_GET['name'] . "%' AND `author` LIKE '%" . $_GET['author'] . "%' ";
        $query = mysqli_query($connect, $requestISBN);
        while ($row = mysqli_fetch_assoc($query))
        {
            echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['author'] . '</td>';
            echo '<td>' . $row['year'] . '</td>';
            echo '<td>' . $row['isbn'] . '</td>';
            echo '<td>' . $row['genre'] . '</td>';
            echo '</tr>';
        }
    } else {
 
 
        $query = mysqli_query($connect, $sql);
 
        while ($row = mysqli_fetch_assoc($query))
        {
            echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['author'] . '</td>';
            echo '<td>' . $row['year'] . '</td>';
            echo '<td>' . $row['isbn'] . '</td>';
            echo '<td>' . $row['genre'] . '</td>';
            echo '</tr>';
        }
    }
 
    ?>
 
</table>
</tbody>

</body>
</html>
