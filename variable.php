<!-- Проверка существования переменной -->
<?php
error_reporting(-1);
$my_var = true;
if(isset($my_var))
	echo "Такая переменная есть. Её значение $my_var" . '<br>';

// переменная $a еще не существует
$a = 'Hello, World';
// Теперь $a инициализирована
// .... какие-то команды , использующие $a
echo $a;
// А теперь удалим переменную $a
unset($a);
// Теперь переменная опять не существует
echo $a .'<br>';

$a = 0; $b = 1;
if ($a = $b) {
	echo 'a и b одинаковы';
} else {
	echo 'a и b различны';
}
echo '<br>';

// Жесткие ссылки =&
$a = 10;
$b =& $a; // теперь $b тоже самое, что и $a
$b = 0; // на самом деле $a = 0
echo "b = $b, a = $a";// выводит "$b = 0, a = 0"
echo '<br>';

 $arr = [
 	'ресторан' => 'Китайский сюрприз',
 	'девиз' => 'Norse te computerus'
 ];
$r =& $arr['ресторан']; // $r - то же, что и элемент с индексом 'ресторан' 
$r = 'Восход луны'; // на самом деле $arr('ресторан') = "Восход луны"
echo $arr['ресторан']; // Выводит 'Восход луны
echo '<br>';
 // Жёсткая ссылка на несуществующий элемент.
 $Arr = [
 	'вилка' => '271 руб. 82 коп.',
 	'сковорода' => '818 руб. 28 коп.'
 ];
$b =& $Arr['ложка']; // $b - то же, что и элемент
echo "Элемент с индексом 'ложка': ". $Arr['ложка']."<br> ";
echo "Тип несуществующего элемента 'ложка':" . gettype($Arr['ложка']);
echo '<br>';
 //Символические ссылки
$right = "red";
$blue = "blue";
$color = "right";// Выводит значение переменной $right("red")
echo $$color;
$$color ="sky";//Присваивает переменной новой значение sky

//Ссылки на обьекты
//Обьявляем новый класс
class AgentSmith{};
//Создаем новый обьект класса AgentSmith()
$first = new AgentSmith();
//Присваиваем значение атрибуту класса
$first->mind = 0.123;
//Копируем обьекты
$second = $first;
//Изменяем "разумность" у копии
$second->mind = 100;
//Выводим оба значения
echo "First-mind : {$first->mind}, second : {second->mind}";


$st = `command.com/c dir`;
echo "<pre>$st</pre>";

//Упаковка значений в битовое представление
//Типы графических примитивов
define('LINE', 0);
define('CURVE', 1);
define('RECTANGLE', 2);
define('ELLIPSE', 2);
//Цвет
define('BLACK', 0);
define('BLUE', 4);
define('GREEN', 8);
define('YELLOW', 12);
define('ORINGE', 16);
define('RED', 20);
define('WHILE', 24);

echo "Желтый прямоугольник в десятичном формате: ";
echo RECTANGLE | GREEN; // 10
echo "<br>";
echo decbin(RECTANGLE | GREEN); // 1010
echo "<br>";

// Упаковка пяти значение в целое число
//Прямоугольник
define('RECTANGLE1', 2);
//Зеленый
define('GREEN1', 8);
//Угол на 45 градусов
$angle = 45 << 5;
// Высота 15
$height = 15 << 14;
//Ширина 15
$width = 15 << 23;
//Результат
echo RECTANGLE1 | GREEN1 | $angle | $height | $width;
echo "<br>";
//Распаковка значений из битового поля
echo "Примитив: " .      (126076330 & 3) . '<br>';
echo "Цвет: " .          (126076330 & 28) . '<br>';
echo "Угол поворота: " . (126076330 & 16352) . '<br>';
echo "Высота: " .        (126076330 & 8372224) . '<br>';
echo "Ширина: " .        (126076330 & 4286578688) . '<br>';