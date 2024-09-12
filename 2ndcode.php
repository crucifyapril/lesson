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

echo PHP_EOL . '-------------------------------' . PHP_EOL;

$arr = [];

for ($i = 0; $i < 3; $i++) {
    $arr[$i] = [];

    // Второй уровень массива
    for ($j = 0; $j < 2; $j++) {
        $arr[$i][$j] = [];

        // Третий уровень массива
        for ($k = 0; $k < 5; $k++) {
            $arr[$i][$j][$k] = $k + 1;
        }
    }
}
var_dump($arr);

text('Заполнение многомерных массивов числами по порядку в PHP');

$arr = [];

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 2; $j++) {
        $arr[$i][$j] = $i * 2 + $j + 1;
    }
}
print_r($arr);

echo PHP_EOL . '-------------------------------' . PHP_EOL;

$arr = [];

for ($i = 0; $i < 4; $i++) {
    $arr[$i] = [];
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = 2 + $i * 6 + $j * 2;
    }
}

print_r($arr);

echo PHP_EOL . '-------------------------------' . PHP_EOL;

$arr = [];

for ($i = 0; $i < 4; $i++) {
    $arr[$i] = [];
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = [];
        for ($k = 0; $k < 2; $k++) {
            $arr[$i][$j][$k] = 2 * $j + $k + 1;
        }
    }
}
print_r($arr);

text('Массив ассоциативных массивов в PHP');

$products = [
    [
        'name'   => 'мясо',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'овощи',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'фрукты',
        'price'  => 300,
        'amount' => 7,
    ],
];

foreach ($products as $value) {
    echo $value['name'] . ' ' . $value['price'] . ' рублей ' . $value['amount'] . ' шт.' . PHP_EOL;
}

text('Конвертация многомерных массивов в PHP');

$cities = [
        [
            'country' => 'Россия',
            'city' =>    'Москва',
        ],
        [
            'country' => 'Беларусь',
            'city' =>    'Минск',
        ],
        [
            'country' => 'Россия',
            'city' =>    'Питер',
        ],
        [
            'country' => 'Россия',
            'city' =>    'Владивосток',
        ],
        [
            'country' => 'Украина',
            'city' =>    'Львов',
        ],
        [
            'country' => 'Беларусь',
            'city' =>    'Могилев',
        ],
        [
            'country' => 'Украина',
            'city' =>    'Киев',
        ],
];

$result = [];

foreach ($cities as $city) {
    $country = $city['country'];
    $cityName = $city['city'];
    $result[$country][] = $cityName;
}

print_r($result);

$timedate = [
    [
        'date'  => '2019-12-29',
        'event' => 'name1'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name2'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name3'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name4'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name5'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name6'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name7'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name8'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name9'
    ],
];

$res = [];

foreach ($timedate as $value) {
    $date = $value['date'];
    $event = $value['event'];
    $res[$date][] = $event;
}

print_r($res);

$timedate = [
    '2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
    '2019-12-30'=> ['name5', 'name6', 'name7'],
    '2019-12-31'=> ['name8', 'name9'],
];

$res = [];

foreach ($timedate as $date => $events) {
    foreach ($events as $item) {
        $res[] = [
            'date'  => $date,
            'event' => $item
        ];
    }
}
print_r($res);

text('функции со строками в PHP');

$text = 'php';
echo strtoupper($text) . PHP_EOL;
echo strtolower($text) . PHP_EOL;
echo ucfirst('london') . PHP_EOL;
echo lcfirst('London') . PHP_EOL;
echo ucwords('london is the capital of great britain') . PHP_EOL;
echo strlen('html css php') . PHP_EOL;
$password = 'J756VVtr';
if (strlen($password) > 5 && strlen($password) < 10) {
    echo 'пароль подходит' . PHP_EOL;
} else {
    echo 'пароль не подходит' . PHP_EOL;
}
$text = 'html css php';
echo substr($text, 0, 4) . PHP_EOL;
echo substr($text, 5, 3) . PHP_EOL;
echo substr($text, 9, 3) . PHP_EOL;

$text = 'https://hauntingclaire.ru';

if (strpos($text, 'http://') === 0) {
    echo 'префикс http://' . PHP_EOL;
}   elseif (strpos($text, 'https://') === 0) {
        echo 'префикс https://' . PHP_EOL;
}

if (strpos($text, '.png') === false || strpos($text, '.jpg') === false) {
    echo 'нет расширения .png или .jpg' . PHP_EOL;
} else {
    echo 'есть расширение .png или .jpg' . PHP_EOL;
}

$string = 'stroka';

if (strlen($string) > 5) {
    $string = substr($string, 0, 5);
    echo $string . '...' . PHP_EOL;
} else {
    echo $string . PHP_EOL;
}

echo str_replace('.', '-', '31.12.2013') . PHP_EOL;
echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'abcabc') . PHP_EOL;
echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', '1a2b3c4b5d6e7f8g9h0') . PHP_EOL;

$str = 'abc';

echo strtr($str, 'abc', '123') . PHP_EOL;
echo substr_replace($str, '!!!!!', 0, 3) . PHP_EOL;
echo strpos('abc abc abc', 'b') . PHP_EOL;
echo strrpos('abc abc abc', 'b') . PHP_EOL;
echo strpos('abc abc abc', 'b', 3) . PHP_EOL;
echo strpos('aaa aaa aaa aaa aaa',' ', 5) . PHP_EOL;
echo strpos('aaa aaa aaa aaa aaa','..') . PHP_EOL; // если не найдено то возвращает пустоту

if (substr($str, 0, 7) == 'http://' || substr($str, 0, 8) == 'https://')
    echo "Да";
else
    echo "Нет";

$arr = explode(' ', 'html css php');
var_dump($arr);
echo implode(' ', $arr) . PHP_EOL;

$date = '2019-12-29';

$arr = explode('-', $date);
$arr = array_reverse($arr);
echo implode('.', $arr) . PHP_EOL;

$arr = str_split('1234567890', 2);
$string = implode('-', $arr);
echo $string . PHP_EOL;

echo trim('/php/', '/') . PHP_EOL;

$str = 'слова слова слова.';
echo rtrim($str, '.') . PHP_EOL;
$str = 'слова слова слова';
echo rtrim($str, '.') . '.' . PHP_EOL;

echo strrev('12345') . PHP_EOL;
echo str_shuffle('dfghjkl') . PHP_EOL;

echo number_format('12345678', 0, ' ', ' ') . PHP_EOL;

echo str_repeat('x', 5) . PHP_EOL;

echo strchr('ab-cd-ef', '-cd-ef') . PHP_EOL;
echo strrchr('ab-cd-ef', '-ef') . PHP_EOL;
echo strstr('ab--cd--ef', '--cd--ef') . PHP_EOL;

text('Стаандартные функции массивов в PHP');

$arr = [1, 2, 3, 4, 5];

echo in_array(3, $arr) . PHP_EOL;

echo array_sum($arr) . PHP_EOL;
echo array_product($arr) . PHP_EOL;
echo array_sum($arr) / count($arr) . PHP_EOL;

$arr = (range(1, 100)); // создание массива с числами от 1 до 100
$arr = (range('a', 'z')); // создание массива с буквами от a до z

$arr = (range(1, 9));
$arr = implode('-', $arr);
echo $arr . PHP_EOL;

$arr = (range(1, 100));
echo array_sum($arr) . PHP_EOL;

$arr = (range(1, 10));
echo array_product($arr) . PHP_EOL;

$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];

print_r(array_merge($arr1, $arr2));

$arr = [1, 2, 3, 4, 5];

print_r(array_slice($arr, 1, 3)); // 2, 3, 4

print_r(array_splice($arr, 1, 3));

$arr = [1, 2, 3, 4, 5];

$result = array_splice($arr, 3, 0, ['a', 'b', 'c']);
print_r($arr);

$arr = [1, 2, 3, 4, 5];

$result = array_splice($arr, 1, 0, ['a', 'b']);
$result = array_splice($arr, 6, 0, ['c']);
$result = array_splice($arr, 8, 0, ['d']);
print_r($arr);

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);

$array = array_combine($keys, $values);
print_r($array);

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
print_r(array_flip($arr));
$arr = [1, 2, 3, 4, 5];
print_r(array_reverse($arr));

$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo (array_search('-', $arr)) . PHP_EOL;
$result = array_splice($arr, 1, 1);
print_r($arr);

$arr = ['a', 'b', 'c', 'd', 'e'];
$arr = array_replace($arr, [0 => '!', 3 => '!!']);
print_r($arr);

$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
sort($arr);
print_r($arr);

text('Время в PHP');

echo mktime(0, 0, 0, 3, 1, 2025) . PHP_EOL;

echo date('Y.m.d.h.i.s') . PHP_EOL;
echo date('Y-m-d, Y.m.d, H.i.s, H:i:s') . PHP_EOL;

text('Практика');

$arr = [1, 2, 3, 4, 5];
echo (array_sum($arr) / count($arr)) . PHP_EOL;

$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo $sum . ' ';

$arr = [];

for ($i = 0; $i < 10; $i++) { // array_fill(0, 10, 'x');
    $arr[] = 'x';
}

print_r($arr);

$arr = [];

for ($i = 0; $i < 10; $i++) {
    $arr = range(1, 10);
}
shuffle($arr);
print_r($arr);

$arr = [];
$counter = 1;

for ($i = 0; $i < 3; $i++) {
    $subarr = [];
    for ($j = 0; $j < 3; $j++) {
        $subarr[] = $counter++;
    }
    $arr[] = $subarr;
}
print_r($arr);

$arr = range(1, 26);
foreach ($arr as $key => $value) {
    $key = range('a', 'z');
    $value = range(1, 26);
}
print_r($arr);

text('функции в PHP');

function plusminus($num): void
{
    if ($num > 0) {
        echo '+';
    } elseif ($num < 0) {
        echo '-';
    } else {
        echo 'числа не существует либо равен 0';
    }
    echo PHP_EOL;
}

plusminus(8);

text('Необязательные параметры функций в PHP');
function func($num1 = 0, $num2 = 0): void
{
    echo $num1 + $num2;
}

func(2, 3);
func(3);
func();

text('Инструкция return в PHP');

function func232($num): int {
    return $num * $num;
}

$res = func232(3); // return
echo $res . PHP_EOL;

text('Последовательный вызов функций в PHP');

function func1($num)
{
    return $num * $num;
}

$res = func1(func1(3));
echo $res . PHP_EOL;

text('Тонкое место return в PHP');

function func2($num) {
    if ($num <= 0) {
        return abs($num);
    } else {
        return $num * $num;
    }
}

echo func2(10) . PHP_EOL;
echo func2(-5);

text('return в цикле в PHP');
function func9($num) {
    $sum = 0;

    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
    }
    return $sum;
}

echo func9(3);

text('применение return в цикле в PHP');

function countDivisions($number): int {
    $iterations = 0;

    while ($number >= 10) {
        $number /= 2;
        $iterations++;
    }

    return $iterations;
}

// Пример использования функции
$number = 100;
$result = countDivisions($number);
echo 'Количество итераций: ' . $result;

text('Приемы работы с return в PHP');

function funckontroll($num1, $num2) {
    if ($num1 > 0 and $num2 > 0) {
        return $num1 * $num2;
    } else {
        return $num1 - $num2;
    }
}

echo funckontroll(3, 4);

text('Флаги в функциях PHP');

function chetnoe($nums)
{
    foreach ($nums as $value) {
        if ($value % 2 == 0) {
            return 'true' . PHP_EOL;
        } else {
            return 'false' . PHP_EOL;
        }
    }
}
$arr = [2, 4, 6, 8, 10];
echo chetnoe($arr) . PHP_EOL;

function nechetnoe($nums)
{
    foreach ($nums as $value) {
        if ($value % 2 != 0) {
            return 'true' . PHP_EOL;
        } else {
            return 'false' . PHP_EOL;
        }
    }
}

echo nechetnoe($arr) . PHP_EOL;

$arr = [2, 3, 4, 6, 35];
$birds = [1, 2, 3, 4, 5];

$result = array_filter($arr, fn($value) => !in_array($value, $birds));
var_dump($result);

function gooseFilter($birds) {
    $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];
    $result = array_filter($birds, fn($value) => !in_array($value, $geese));
    return array_unique($result);
}

$arr = ["African", "Roman Tufted", "Nanaya Shiki", "Nanaya Shiki"];

var_dump(12345);

$arr = ['a' => 1, 'b' => 2, 'c' => 3];

$arr['a']++;
$arr['a']++;
$arr['b']--;
$arr['c']--;
$arr['c']--;

var_dump($arr);