<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./style.css">
<div class="info">
<?
echo ('ЗАДАНИЕ 1');
echo ('<br><br>');

//создание массива со списком студентов и вывод на экран
$students = ['Попов','Сидоров','Шишкова','Табаков','Бареев','Киреева','Гоголь'];
print_r($students);

echo ('<br><br>');
//посчитать количество студентов
echo ('Количества студентов в списке: ');
echo count($students);

echo ('<br><br>');
//проверка, есть ли в списке "Сидоров"
if(in_array('Сидоров',$students)){
    echo 'Да, в списке есть Сидоров';
}else{
    echo 'Нет, в списке нет Сидорова';
}

echo ('<br><br>');
//удаление последней фамилии из списка и
// сохранение ее в переменную $expelled
$expelled = array_pop($students);
echo('Из списка был удален ');
echo $expelled;

echo ('<br><br>');
?>

<?
echo ('ЗАДАНИЕ 2<br><br>');

//сортировка списка по фамилиям и 
//вывод в форме Кружок - Фамилия
$array = ['Спортивный'=>'Сидоров','Художественный'=>'Емелина','Музыкальный'=>'Иванова','Литературный'=>'Петров','Биологический'=>'Антонова'];
echo 'Кружок - Фамилия<br><br>';
asort($array);
foreach($array as $key => $val){
    echo "$key - $val\n";
    echo '<br>';
}
echo ('<br>');
?>

<?
echo ('ЗАДАНИЕ 3<br><br>');

//
$student = [
    'name' => 'Ralina',
    'surname' => 'Ziatdinova',
    'group' => '424WEB',
    'hobby' => 'minecraft',
    'profiles' => ['telegram' => '@heylovvely', 'vk' => 'heylonely']
];

echo ('Имя - ');
echo $student['name'];
echo '<br>';
echo ('Фамилия - ');
echo $student['surname'];
echo '<br>';
echo ('Группа - ');
echo $student['group'];
echo '<br>';
echo ('Хобби - ');
echo $student['hobby'];
echo '<br>';
echo ('Телеграм - ');
echo $student['profiles']['telegram'];
echo '<br>';
echo ('Вконтакте - ');
echo $student['profiles']['vk'];
?>
</div>

<img src="https://i.pinimg.com/564x/2a/e6/2e/2ae62e06e7c4d265cad0f8248ba45583.jpg" alt="minion">