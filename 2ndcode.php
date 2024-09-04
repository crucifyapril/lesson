<?php
require_once '1st.php';

text('Столбец элементов массива в PHP');

$arr = ['a', 'b', 'c', 'd', 'e'];

foreach ($arr as $value) {
    echo $value . ' ';
}
echo PHP_EOL;

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$res = 0;

foreach ($arr as $item) {
    echo $res += $item;
    echo ' ';
}
echo $res . PHP_EOL;
text('');
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$res = 0;

foreach ($arr as $item) {
    echo $res += $item;
    echo $res / count($arr);
    echo ' ';
}

text('Получение ключей в цикле foreach в PHP');

$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];

foreach ($arr as $key => $value) {
    echo $key . ' - ' . $value . PHP_EOL;
}

$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];

foreach ($arr as $key => $value) {
    echo $key . ' - возраст ' . $value . ' лет' . PHP_EOL;
}

text('Перебор массива и if в PHP');

$arr = [1, 2, 3, 4, 5];

foreach ($arr as $value) {
    if ($value % 2 == 1) {
        echo $value . ' ';
    }
}

echo PHP_EOL;

foreach ($arr as $value) {
    if ($value >= 3 && $value <= 10) {
        echo $value . ' ';
    }
}

echo PHP_EOL;

$arr = [-1, 2, -3, 4, -5];
$res = 0;

foreach ($arr as $item) {
    if ($item > 0) {
        $res += $item;
    }

}
echo $res . PHP_EOL;

$arr = [10, 20, 30, 50, 235, 3000];
$res = 0;

foreach ($arr as $item) {
    $firstDigit = substr((string)$item, 0, 1); // Получаем первую цифру числа
    if ($firstDigit == '1' || $firstDigit == '2' || $firstDigit == '5') {
        echo $item . "\n"; // Выводим число, если оно начинается на 1, 2 или 5
    }
}
echo $item . PHP_EOL;

text('Цикл while в PHP');

$i = 1;

while ($i <= 100) {
    echo $i . ' ';
    $i++;
}

echo PHP_EOL;

$i = 11;

while ($i <= 33) {
    echo $i . ' ';
    $i++;
}

echo PHP_EOL;
text('Более сложный цикл while в PHP');

$i = 1;

while ($i <= 100) {
    if ($i % 2 == 0) {
        echo $i . ' ';
    }
    $i++;
}
echo PHP_EOL;

$i = 1;

while ($i <= 100) {
    if ($i % 2 == 1) {
        echo $i . ' ';
    }
    $i++;
}
echo PHP_EOL;
text('Обратный отсчет в цикле while в PHP');

$i = 30;

while ($i >= 1) {
    $i--;
    echo $i . ' ';
}
echo PHP_EOL;
text('Ошибки начинающих при работе с циклом while в PHP');

$i = 10;

while ($i >= 1) {
    echo $i . ' ';
    $i--;
}
echo PHP_EOL;
text('Забытое увеличение счетчика while в PHP');

$i = 10;

while ($i >= 1) {
    echo $i . ' ';
    $i--;
}
echo PHP_EOL;
text('Перепутаны инкремент и декремент в цикле while в PHP');

$i = 10;

while ($i >= 1) {
    echo $i . ' ';
    $i--;
}
echo PHP_EOL;
text('Изначально неверное условие в цикле while в PHP');

$i = 10;

while ($i >= 0) {
    echo $i . ' ';
    $i--;
}
echo PHP_EOL;
text('Неправильное понимание условия окончания в цикле while в PHP');

$i = 10;

while ($i >= 1) {
    echo $i;
    $i--;
}
echo PHP_EOL;
text('Цикл for в PHP');

for ($i = 1; $i <= 100; $i++) {
    echo $i . ' ';
}
echo PHP_EOL;

for ($i = 11; $i <= 33; $i++) {
    echo $i . ' ';
}
echo PHP_EOL;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . ' ';
    }
}
echo PHP_EOL;

for ($i = 1; $i <= 99; $i++) {
    if ($i % 2 == 1) {
        echo $i . ' ';
    }
}
echo PHP_EOL;

for ($i = 100; $i >= 0; $i--) {
    echo $i . ' ';
}
echo PHP_EOL;
text('Накопление результата в цикле PHP');
$result = 1;

for ($i = 1; $i < 20; $i++) {
    $result *= $i;
    echo $result . ' ';
}
echo $result . PHP_EOL;

$res = 0;

for ($i = 2; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $res += $i;
        echo $res . ' ';
    }
}

echo PHP_EOL;

text('Инструкция break в PHP');

$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($arr as $item) {
    if ($item == 0) {
        echo 'found' . PHP_EOL;
        break;
    }
}

$arr = [0, 1, 2, -1, -2, 3, 4, 5, 6, 7, 8, 9, 10];
$res = 0;

foreach ($arr as $item) {
    if ($item < 0) {
        break;
    }
    $res += $item;
    echo $res . ' ';
}

echo PHP_EOL;

$arr = [0, 1, 2, -1, -2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($arr as $key => $item) {
    if ($item == 3) {
        echo $key . PHP_EOL;
        break;
    }
}

$res = 0;
// сколько нужно целых чисел для получения 100 путем сложения
for ($i = 1; $i <= 100; $i++) {
    $res += $i;
    if ($res > 100) {
        break;
    }
}
echo $res . PHP_EOL;

text('Проверяем отстутствие элемента массива в PHP');

$arr = ['a', 'b', 'c', 'd', 'e'];
// проверка наличия по встроенной функции
if (!in_array('c', $arr)) {
    echo 'нет' . PHP_EOL;
} else {
    echo 'да' . PHP_EOL;
}
// с помощью цикла и переменной флага
$flag = false;

foreach ($arr as $item) {
    if ($item == 'c') {
        $flag = true;
        break;
    }
}

if ($flag === true) {
    echo 'да' . PHP_EOL;
} else {
    echo 'нет' . PHP_EOL;
}

text('Произвольное количество итераций в цикле while в PHP');

$num = 40;

while ($num < 1000) {
    $num *= 3;
    echo $num . ' ';
}
echo PHP_EOL;
 // второй вариант
for ($num = 40; $num < 1000;) {
    $num *= 3;
    echo $num . ' ';
}
echo PHP_EOL;

text('Формирование строк через циклы в PHP');

$str = '';

for ($i = 0; $i < 5; $i++) {
    $str .= '0';
}

echo $str;
echo PHP_EOL;
text('Формирование строк с цифрами через циклы в PHP');
$str = '';

for ($i = 1; $i <= 9; $i++) {
    $str .= $i;
}
echo $str . PHP_EOL;

$str = '';

for ($i = 9; $i >= 1; $i--) {
    $str .= $i;
}
echo $str . PHP_EOL;

$str = '-';

for ($i = 1; $i <= 9; $i++) {
    $str .= $i . '-';
}

echo $str . PHP_EOL;

text('Вложенные циклы в PHP');

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo $i;
    }
}
echo PHP_EOL;

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo $i . $j . ' ';
    }
}
echo PHP_EOL;
text('Заполнение массивов в PHP');
$arr = [];

array_push($arr, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$array = [];
array_push($array, 'x', 'x', 'x', 'x', 'x');

text('Заполнение массивов через цикл for в PHP');

$arr = [];

for ($i = 0; $i < 100; $i++) {
    $arr[] = $i + 1;
} // var_dump покажет 99 ключей и 100 значений

$arr = [];
for ($i = 0; $i < 100; $i++) {
    if ($i % 2 == 0) {
        $arr[] = $i + 1;
    }
} // var_dump покажет нечетное количество до 99 числа

text('Цикл for для массивов в PHP');

$arr = ['a', 'b', 'c', 'd', 'e'];
$length = count($arr);

for ($i = 0; $i < $length; $i++) {
    echo $arr[$i] . ' ';
}

echo PHP_EOL;

text('Применение цикла for для массивов в PHP');

$arr = ['a', 'b', 'c', 'd', 'e'];
$length = (count($arr) - 1);

for ($i = 0; $i < $length; $i++) {
    echo $arr[$i] . ' ';
}

echo PHP_EOL;

$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = (count($arr) / 2);

for ($i = 0; $i < $length; $i++) {
    echo $arr[$i] . ' ';
}
echo PHP_EOL;

text('Распространенная ошибка при применении цикла for для массивов в PHP');

$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = count($arr);
$sum = 0;

for ($i = 1; $i < $length; $i++) {
    $sum += $arr[$i];
}

echo $sum;
echo PHP_EOL;

text('Изменение массива в цикле for PHP');

$arr = [1, 2, 3, 4, 5];
$length = count($arr);

for ($i = 0; $i < $length; $i++) {
    $arr[$i] **= 2;
} // $arr = [1, 4, 9, 16, 25]

text('Сокращенные операции для изменения массива в цикле for PHP');

$arr = [1, 2, 3, 4, 5];
$length = count($arr);

for ($i = 0; $i < $length; $i++) {
    $arr[$i]--;
} // $arr = [0, 1, 2, 3, 4]
echo PHP_EOL;

$arr = [1, 2, 3, 4, 5];
$length = count($arr);

for ($i = 0; $i < $length; $i++) {
    $arr[$i] += 10;
} // $arr = [11, 12, 13, 14, 15]

text('Практика на массивы в цикле в PHP');

$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];

foreach ($arr as $value) {
    $value *= 1.10;
    echo $value . ' ';
} // $arr = [110, 220, 330, 440, 550, 660, 770] var_dump($arr); показывает старые значения
echo PHP_EOL;

foreach ($arr as &$lowervalue) { // &$lowervalue - & чтобы изменения отразились на исходном массиве
    if ($lowervalue <= 400) {
        $lowervalue *= 1.10;
        echo $lowervalue . ' ';
    }
}

echo PHP_EOL;

$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sumkeys = 0;
$sumvalues = 0;

foreach ($arr as $key => $value) {
    $sumkeys += $key;
    $sumvalues += $value;
}

$result = $sumkeys / $sumvalues;
echo $result;
echo PHP_EOL;

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrvalue = [];
$arrkeys = [];

foreach ($arr as $key => $value) {
    $arrkeys[] = $key;
    $arrvalue[] = $value;
}
print_r($arrkeys);
echo PHP_EOL;
print_r($arrvalue);
echo PHP_EOL;

$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];

$newarr = [];

foreach ($arr as $key => $value) {
    $firstDigit = substr($value, 0, 1);
    if ($firstDigit == 1 || $firstDigit == 2) {
        $newarr[$key] = $value;
    }
}

print_r($newarr);

text('Отработка циклов PHP');
$i = 1; // №1

while($i <= 100) {
    echo $i . ' ';
    $i++;
}

$i = 100; // №2

while ($i >= 1) {
    echo $i . ' ';
    $i--;
}
echo PHP_EOL . '=============================' . PHP_EOL;
$arr = []; // с помощью цикла заполнить без array_push

for ($i = 0; $i < 10; $i++) {
    $arr[] = 'X';
}

// Вывод результата
print_r($arr);
echo PHP_EOL;

$arr = [];

//for ($i = 0; $i < 10; $i++) {
  //  $arr[$i]++;
//}
$sum = 1;
/*foreach ($arr as &$value) {
    if ($value < 10) {
        $sum += $value;
    }
}*/
while ($sum <= 10) {
    $arr[] = $sum;
    $sum++;
}
print_r($arr);

foreach ($arr as $item) {
    if ($item > 0 && $item < 10) {
        echo $item . ' ';
    }
}

echo PHP_EOL;

foreach ($arr as $item) {
    if ($item === 5) {
        echo 'есть' . PHP_EOL;
    }
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
foreach ($arr as $item) {
    $sum += $item;
}

echo $sum;
echo PHP_EOL;

text('Многомерные массивы в PHP');

$arr = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
    ['j', 'k', 'l'],
];

echo $arr[3][2];
echo $arr[1][1];
echo $arr[2][0];
echo $arr[0][0];
echo PHP_EOL;

$arr = [[1, 2], [3, 4], [5, 6]];
$sum = 0;

foreach ($arr as $item) { // *****************
    foreach ($item as $value) {
        $sum += $value;
    }
}
echo $sum;
echo PHP_EOL;

text('Трехмерный массив в PHP');

$arr = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];
$sum = 0;
foreach ($arr as $item) {
    foreach ($item as $value) {
        foreach ($value as $value2) {
            $sum += $value2;
        }
    }
}
echo $sum;
echo PHP_EOL;

text('Ассоциативные массивы в PHP');

$arr = [
    'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
    'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
];

echo $arr['boys'][1] . PHP_EOL;
echo $arr['girls'][1] . PHP_EOL;

$arr = [
    'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];

echo $arr['en'][2] . PHP_EOL;

$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];

echo $arr[0]['name'] . ' ';
echo $arr[0]['salary'] . PHP_EOL;
echo $arr[2]['name'] . ' ';
echo $arr[2]['salary'] . PHP_EOL;

text('Произвольные массивы в PHP');

$arr = [[1, 2, 3, [4, 5, [6, 7]]], [8, [9, 10]]];
// к каждому элементу по отдельности, без цикла.
$sum = $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[0][3][0] + $arr[0][3][1] + $arr[0][3][2][0] + $arr[0][3][2][1];
echo $sum . PHP_EOL;

text('Перебор многомерных массивов в PHP');

$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
$sum = 0;

foreach ($arr as $item) {
    foreach ($item as $value) {
        $sum += $value;
    }
}
echo $sum;
echo PHP_EOL;

text('Работа с ключами в многомерных массивах в PHP');

$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];

foreach ($arr as $key => $value) {
    foreach ($value as $key2 => $value2) {
        echo $key2 . '-' . $value2 . PHP_EOL;
    }
}

$arr = [
    'group1'  => ['user11', 'user12', 'user13', 'user43'],
    'group2'  => ['user21', 'user22', 'user23'],
    'group3'  => ['user31', 'user32', 'user33'],
    'group4'  => ['user41', 'user42', 'user43'],
    'group5'  => ['user51', 'user52'],
];

foreach ($arr as $key => $value) {
    foreach ($value as $key2 => $value2) {
        echo $key . '-' . $value2 . PHP_EOL;
    }
}

text('Заполнение многомерных массивов PHP');

$arr = [];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $arr[$i][$j] = $j + 1;
    }
}
var_dump($arr);

$arr = [];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $arr[$i][$j] = 'x';
    }
}
var_dump($arr);