<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
$elements = [
[
	'id' => '1',
	'name' => 'Дима',
	'age' => '23',
	'salary' => '400'
],
[
	'id' => '2',
	'name' => 'Петя',
	'age' => '25',
	'salary' => '500'


],
[
	'id' => '3',
	'name' => 'Вася',
	'age' => '23',
	'salary' => '500'
],
[
	'id' => '4',
	'name' => 'Артем',
	'age' => '21',
	'salary' => '1000'
],
[
	'id' => '5',
	'name' => 'Иван',
	'age' => '28',
	'salary' => '500'
],
[
	'id' => '6',
	'name' => 'Кирилл',
	'age' => '27',
	'salary' => '400'
]
];

$table = '<table>';
	$keys = array_keys($elements[0]);
	$table .= '<tr>';
	foreach ($keys as $key) {
		$table .= '<th>'.$key.'</th>';
	}
	$table .='</tr>';
	
// }
// echo $table;
 foreach ($elements as $elem) {
 	$table .= '<tr><th>'.$elem['id'].'</th>';
 	$table .='<th>'.$elem['name'].'</th>';
 	$table .='<th>'.$elem['age'].'</th>';
 	$table .='<th>'.$elem['salary'].'</th><tr>';
 	
 }
 $table .='</table>';
 echo $table;

?>

</body>
</html>

