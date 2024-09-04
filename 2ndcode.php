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