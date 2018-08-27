<?php 
$json = file_get_contents(__DIR__ . '/ExampleData.json');
$data = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <h2>PhoneBookTable</h2> 
</head>
<body>
    
	<table>
        <thead>
		 <th>Имя</th>
        <th>Фамилия</th>
        <th>Адрес</th>
        <th>Телефон</th>
 		</thead>	

  <tbody>
    <?php foreach ($data as $datum): ?>
        <tr>
            <td>
                <?php echo ($datum['firstName'] ); ?>
            </td>

            <td>
                <?php echo ($datum['lastName']); ?>
            </td>

            <td>
                <?php echo ($datum['address']); ?>
            </td>

            <td>
                <?php echo ($datum['phoneNumber']); ?>
            </td>
        </tr>
    <?php endforeach; ?>

</tbody>
</table>
    
</body>
</html>