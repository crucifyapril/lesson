<?php

require_once '1st.php';
$num = 123;
echo $num . PHP_EOL;
$a = 10;
$a = 20;
echo $a . PHP_EOL;
$a = 1 + 2 + 3;
echo $a . PHP_EOL;
text('Математические операции с переменными в PHP');
$a = 10;
$b = 2;
$c = 10;
$d = 5;
$res = $c + $d;
echo $a + $b . PHP_EOL;
echo $a - $b . PHP_EOL;
echo $a * $b . PHP_EOL;
echo $a / $b . PHP_EOL;
echo $res . PHP_EOL;
$a = 1;
$b = 2;
$c = 3;
echo $a + $b + $c . PHP_EOL;
$a = 10;
$b = 5;
$c = $a - $b;
$d = 7;
$res = $c + $d;
echo $res . PHP_EOL;
text('Дроби в PHP');
$a = 1.5;
$b = 0.75;
echo $a + $b . PHP_EOL;
text('Отрицательные числа в PHP');
$a = -100;
echo $a . PHP_EOL;
$a = -32;
echo -$a . PHP_EOL;
text('Остаток от деления в PHP');
$a = 10;
$b = 3;
echo $a % $b . PHP_EOL;
text('Возведение в степень в PHP');
$a = 2;
$b = 10;
echo $a ** $b . PHP_EOL;
text('Сложение строк в PHP');
$str = 'hello';
echo $str . PHP_EOL;
$str = 'abc';
$str2 = 'def';
echo $str . $str2 . PHP_EOL;
text('Пробелы при сложении строк в PHP');
$str = 'hello';
$str2 = ' world';
echo $str . $str2 . PHP_EOL;
text('Длина строки в PHP');
$str = 'hauntingclaire';
echo strlen($str) . PHP_EOL;
text('Проблема с кириллицей в PHP');
echo strlen('привет') . PHP_EOL;
echo mb_strlen('привет') . PHP_EOL;
text('Работа с HTML тегами в PHP'); // разнообразие в применении
echo '<i>hello</i>' . PHP_EOL;
echo '<br>123456789</br>' . PHP_EOL;
text('Атрибуты тегов в PHP');
echo '<a href="1st.php">ссылка</a>';
text('Логические значения в PHP');
$a = true;
$b = false;
echo $a . PHP_EOL;
echo $b . PHP_EOL;
text('Значение null в PHP');
$a = null;
echo $a . PHP_EOL; // echo $doesntexist . PHP_EOL; // PHP Warning:  Undefined variable $doesntexist
text('Принудительное преобразование в целые числа на PHP');
$test = '12345';
echo (int)$test . PHP_EOL;
var_dump($test);
var_dump((int)$test);
text('Принудительное преобразование в дробные числа в PHP');
$test = '12.345';
echo (float)$test . PHP_EOL;
var_dump($test);
var_dump((float)$test);
text('Преобразование дроби к целому числу в PHP');
$test = 12.345;
echo (int)$test . PHP_EOL;
var_dump($test);
var_dump((int)$test);
text('Преобразование к строке в PHP');
$test = 12.345;
echo (string)$test . PHP_EOL;
var_dump($test);
var_dump((string)$test);
$test = 12345;
echo (string)$test . PHP_EOL;
var_dump($test);
var_dump((string)$test);
text('Получение символов строки на PHP');
$str = 'abcde';
echo $str[0];
echo $str[2];
echo $str[4] . PHP_EOL;
$str = 'abcde';
echo $str[4];
echo $str[3];
echo $str[2];
echo $str[1];
echo $str[0] . PHP_EOL;
$str = 'abcde';
$num = $str[0];
echo $num . PHP_EOL;
text('Последний символ строки PHP');
$str = 'abcde';
$last = strlen($str) - 1;
echo $str[$last] . PHP_EOL;
$prelast = strlen($str) - 2;
echo $str[$prelast] . PHP_EOL;
text('Цифры в строке на PHP');
$str = '12345';
echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4] . PHP_EOL;
text('Обращение к цифрам числа на PHP');
$num = 12345;
$str = (string)$num;
echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4] . PHP_EOL;
text('Сокращенные операции в PHP');
$num = 47;
$num += 7;
$num -= 18;
$num *= 10;
$num /= 15;
$str = 'a';
$str .= 'b';
$str .= 'c';
echo $num . $str . PHP_EOL;
text('Операции инкремента и декремента в PHP');
$num = 10;
$num++;
$num++;
$num--;
echo $num . PHP_EOL;
text('Практика на операции в PHP');
$seconds = 86400 * 365;
echo $seconds . PHP_EOL; // сколько секунд в году
$minutes = 60 * 24 * 365;
echo $minutes . PHP_EOL; // сколько минут в году
text('Массивы в PHP');
$array = [1, 2, 3];
var_dump($array);
text('Как вывести отдельный элемент массива в PHP');
echo $array[0] . PHP_EOL;
echo $array[1] . PHP_EOL;
echo $array[2] . PHP_EOL;
$array = ['a', 'b', 'c', 'd'];
echo $array[0] . '+' . $array[1] . '+' . $array[2] . '+' . $array[3] . PHP_EOL;
$array = [1, 2, 3];
echo $array[0] + $array[1] + $array[2] . PHP_EOL;
$array = [2, 5, 3, 9];
$res = $array[0] * $array[1] + $array[2] * $array[3];
echo $res . PHP_EOL;
text('Ассоциативные массивы в PHP');
$array = [1 => 'a', 2 => 'b', 3 => 'c'];
echo $array[1];
echo $array[2];
echo $array[3] . PHP_EOL;
text('Хитрость с ключами в PHP');
$array = [
    1 => 'Январь',
    'Февраль',
    'Март',
    'Апрель',
    'Май',
    'Июнь',
    'Июль',
    'Август',
    'Сентябрь',
    'Октябрь',
    'Ноябрь',
    'Декабрь'
];
echo $array[1] . PHP_EOL;
text('Строковые ключи в PHP');
$user = ['name' => 'Alex', 'lastname' => 'Smith', 'patronymic' => 'Petrov'];
echo $user['name'] . ' ';
echo $user['lastname'] . ' ';
echo $user['patronymic'] . PHP_EOL;
$date = ['day' => '30', 'month' => '08', 'year' => '2024'];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] . PHP_EOL;
text('Длина массива в PHP');
echo count($array) . PHP_EOL; // янверь февраль март апрель май и т.д. 12 месяцев
$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
echo count($array) . PHP_EOL;
text('Последний элемент массива в PHP');
$array = ['a', 'b', 'c', 'd', 'e'];;
echo end($array) . PHP_EOL;
echo (count($array) - 1) . ' ';
echo (count($array) - 2) . PHP_EOL; // последний и предпоследний массив
text('Изменение элементов массива в PHP');
$array = ['a' => 1, 'b' => 2, 'c' => 3];
$array['a'] = 'f';
$array['b'] = 'r';
$array['c'] = 'i';
$array[3] = 'd';
echo $array['a'] . PHP_EOL;
text('Перезапись элементов массива в PHP');
$array = ['a' => 1, 'b' => 2, 'c' => 3];
$array['a'] += 3;
$array['b'] += 3;
$array['c'] += 3;
echo $array['a'] . ' ' . $array['b'] . ' ' . $array['c'] . PHP_EOL;
text('Заполнение массивов в PHP');
$array = [];
array_push($array, 1, 2, 3, 4, 5);
echo $array[0] . ' ' . $array[1] . ' ' . $array[2] . ' ' . $array[3] . ' ' . $array[4] . PHP_EOL;
$array = [1, 2, 3];
array_push($array, 4, 5);
echo $array[0] . ' ' . $array[1] . ' ' . $array[2] . ' ' . $array[3] . ' ' . $array[4] . PHP_EOL;
text('Явное указание ключей в PHP');
$array = [];
$array['year'] = 2024;
$array['month'] = 8;
$array['day'] = 31;
echo $array['a'] . ' ' . $array['b'] . ' ' . $array['c'] . PHP_EOL;
text('Ключи из переменных в PHP');
$array = [1, 2, 3, 4, 5];
$key1 = 0;
$key2 = 1;
echo $array[$key1] . ' ' . $array[$key2] . PHP_EOL;
$array = ['a' => 1, 'b' => 2, 'c' => 3];
$key = 'a';
echo $array[$key] . PHP_EOL;
text('Конструкция if-else в PHP, Операторы больше и меньше в PHP');
$test = 1;
if ($test > 10) {
    echo 'Больше заданной';
} else {
    echo 'Меньше заданной';
}
echo PHP_EOL; // Необязательность фигурных скобок в PHP - в будущем будем использовать с фигурными скобками
if ($test < 10) {
    echo 'Меньше заданной';
} else {
    echo 'Больше заданной';
}
echo PHP_EOL;
if ($test >= 10) {
    echo 'Больше или равно заданной';
} else {
    echo 'Меньше заданной';
}
echo PHP_EOL;
if ($test <= 10) {
    echo 'Меньше или равно заданной';
} else {
    echo 'Больше заданной';
}
echo PHP_EOL;
text('Проверка на равенство в PHP');
$test = 1;
if ($test === 10) {
    echo 'Равно заданной';
} else {
    echo 'Не равно заданной';
}
echo PHP_EOL; // строгое сравнение
$test = 1;

if ($test != 0) {
    echo 'true'; // сработает это, так как переменная НЕ равна 0
} else {
    echo 'false';
} // как правильно писать условия пример
text('Сравнение переменных в PHP');
$test1 = 1;
$test2 = 2;
if ($test1 > $test2) {
    echo $test1 . ' Больше ' . $test2;
} else {
    echo $test1 . ' Меньше ' . $test2;
}
echo PHP_EOL;
text('Нюансы при сравнении типов данных в PHP');
if (0 == '0') {
    echo 'true';
} else {
    echo 'false';
}
echo PHP_EOL; // В настоящее время в PHP общепринято везде стараться использовать строгое сравнение. Считается, что в этом случае код менее подвержен ошибкам.
text('Сложные условия в if-else в PHP, Логическое И в PHP');
$num = 3;
$num1 = 2;
$num2 = 3;
if ($num > 0 && $num < 10) {
    echo 'true';
} else {
    echo 'false';
}
echo PHP_EOL;
if ($num >= 10 and $num <= 10) {
    echo 'true';
} else {
    echo 'false';
}
echo PHP_EOL; // and - логическое И
if ($num1 <= 10 && $num2 >= 3) {
    echo 'true';
} else {
    echo 'false';
}
echo PHP_EOL; // но лучше использовать &&
text('Логическое ИЛИ в PHP'); // || и or - логическое ИЛИ, первое предпочтительнее
text(
    'Приоритет операций сравнения в PHP'
); //Операция and имеет приоритет над or. В следующем примере условие сработает, если переменная $num от 0 до 5 ИЛИ от 10 до 20:
if ($num > 0 && $num < 5 || $num > 10 && $num < 20) {
    echo 'true';
} else {
    echo 'false';
}

echo PHP_EOL;
text('Группировка условий в PHP');
if (($num > 0 and $num < 5) or ($num > 10 and $num < 20)) {
    echo 'true';
} else {
    echo 'false';
}
echo PHP_EOL;

text('Инвертирование высказываний в if-else');
if (!($num1 >= 0 || $num2 <= 10)) {
    echo '+++';
} else {
    echo '---';
}

echo PHP_EOL; // ! - инвертирование делает условие таким $num <= 0 or $num >= 10
text('Конструкция if-else и булевы значения');
$test = true;
if ($test === true) {
    echo 'true';
} else {
    echo 'false';
}
echo PHP_EOL;
if ($test === false) {
    echo 'true';
} else {
    echo 'false';
}
echo PHP_EOL;

text('Логические значения и двойное равно');
$test = 1;
$test2 = 0;
if ($test == true && $test2 == false) {
    echo 'true';
} else { // сработает это, тк 1 == true и 0 == false - это верно
    echo 'false';
}
echo PHP_EOL;

text('Сокращенный if в конструкции if-else');
if ($test) {
    echo 'true';
} else {
    echo 'false';
}
echo PHP_EOL; // ($test == true)
if (!$test) {
    echo 'true';
} else {
    echo 'false';
}
echo PHP_EOL; // ($test != true)
text('Нюанс сокращенных операций'); // идет по не строгому сравнению
text('Команда isset в PHP');
$test = null;
if ($test !== null) {
    echo 'переменная не null';
} else {
    echo 'null';
}
echo PHP_EOL; // проверка что переменная не равна null
if (isset($test)) {
    echo 'переменная не null';
} else {
    echo 'null';
}
echo PHP_EOL; // удобнее командой isset, имеет строгое сравнение
text('Инвертирование высказывания в PHP');
if (!isset($test)) {
    echo 'переменная не null';
} else {
    echo 'null';
}
echo PHP_EOL; // не null - это верно
text('Элементы массивов в PHP');
$array = ['a', 'b', 'c'];
if (isset($arr['5'])) {
    echo $arr['5'];
} else {
    echo 'element does not exist';
}
echo PHP_EOL;
text('Команда empty в PHP');
$test = '';
if (empty($test)) {
    echo 'empty';
} else {
    echo 'not empty';
}
echo PHP_EOL; // инвертируемая !empty будет результатом not empty
text('Сокращенный синтаксис if-else в PHP');
$test = 1;
if ($test === 10) {
    echo 'Равно заданной';
}
echo PHP_EOL; // в противном случае ничего не произойдет
text('Проблема необязательности фигурных скобок в PHP');
$test = 3;
if ($test > 0) {
    echo $test;
}
echo '+++';
echo PHP_EOL; // сработает только первая строка по условию а вторая всегда
if ($test > 0) {
    echo $test;
    echo '+++';
}
echo PHP_EOL; // сработают две строки ПО УСЛОВИЮ
text('Комбинации конструкций if-else в PHP');
$day = 1;
if ($day >= 1 && $day <= 10) {
    echo 'первая декада месяца';
}
if ($day >= 11 && $day <= 20) {
    echo 'вторая декада месяца';
}
if ($day >= 21 && $day <= 31) {
    echo 'третья декада месяца';
}
echo PHP_EOL;
text('Конструкция elseif в PHP');
$day = 100;
if ($day >= 1 && $day <= 10) {
    echo 'первая декада месяца';
} elseif ($day >= 11 && $day <= 20) {
    echo 'вторая декада месяца';
} elseif ($day >= 21 && $day <= 31) {
    echo 'третья декада месяца';
} else {
    echo 'такого дня нет';
}
echo PHP_EOL;
text('Вложенные if в PHP');
$age = 3;
if ($age <= 10 || $age >= 99 ) {
    if ($age >= 9)
    echo 'однозначный'; } else {
        echo 'двузначный';
    }
text('Конструкция switch-case в PHP');
$num = 3; // альтернатива elseif

switch ($num) {
    case 1:
        echo 'Зима' . PHP_EOL;
        break;
    case 2:
        echo 'Весна' . PHP_EOL;
        break;
    case 3:
        echo 'Лето' . PHP_EOL;
        break;
    case 4:
        echo 'Осень' . PHP_EOL;
        break;
    default:
        echo "Некорректное значение";
        break;
}
text('Необязательность default в PHP');
switch ($num) {
    case 1:
        echo 'Зима';
        break;
    case 2:
        echo 'Весна';
        break;
    case 3:
        echo 'Лето';
        break;
    case 4:
        echo 'Осень';
        break;
}
echo PHP_EOL;
text('Необязательность break в PHP');
switch ($num) {
    case 1:
        echo 'Зима';
    case 2:
        echo 'Весна';
    case 3:
        echo 'Лето';
    case 4:
        echo 'Осень';
}
echo PHP_EOL; // без break после выполнения будет продолжаться выполнение
text('Тернарный оператор в PHP');
$num = -5;
$res = ($num >= 0) ? 1 : -1;
echo $res;
echo PHP_EOL;
text('Оператор объединения с null в PHP');
$user = ['name' => 'john', 'age' => 30];
echo $user['name'] ?? 'unknown';
echo PHP_EOL;
text('Цепочки операторов объединения с null в PHP');
echo $user['name'] ?? isset($user['surname']) ?? 'unknown';
echo PHP_EOL;
text('Логические операции в PHP');
$a = 2 * (3 - 1);
$b = 6 - 2;
$res = $a == $b;
var_dump($res);
$a = 5 * (7 - 4);
$b = 1 + 2 + 7;
$res = $a > $b;
var_dump($res);
$a = 2 ** 4;
$b = 4 ** 2;
$res = $a != $b;
var_dump($res);
text('Проверка длины строк и массивов в PHP');
$array = [1, 2, 3];
if (count($array) == 3) {
    echo 'Длина массива равна ' . count($array) . PHP_EOL;
}
text('Проверка символа строки в PHP');
$str = '12345';
$last = $str[strlen($str) - 1];

if ($last == '0') {
    echo '!';
}
text('Проверка символа строки в PHP');
$str = '12345';
$last = $str[strlen($str) - 1];

if ($last == 0) {
    echo 'последняя строка заканчивается на 0';
} else {
    echo 'последняя строка не заканчивается на 0';
}
text('Практика на условия if-else в PHP');
$month = 12;
if ($month >= 1 && $month <= 3) {
    echo 'зима';
} elseif ($month >= 4 && $month <= 6) {
    echo 'весна';
} elseif ($month >= 7 && $month <= 9) {
    echo 'лето';
} elseif ($month >= 10 && $month <= 12) {
    echo 'осень';
} else {
    echo 'некорректное значение месяца';
}