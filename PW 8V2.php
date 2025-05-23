<?php
// Функція для арифметичних операцій
function calculateOperations($a, $b) {
    return [
        "Сума" => $a + $b,
        "Різниця" => $a - $b,
        "Добуток" => $a * $b,
        "Ділення" => $b != 0 ? $a / $b : "Ділення на нуль неможливе"
    ];
}

// Функція для виводу масиву днів тижня
function getDaysOfWeek() {
    return ["Понеділок", "Вівторок", "Середа", "Четвер", "П’ятниця", "Субота", "Неділя"];
}

// Функція для виводу товарів
function displayProducts($products) {
    echo "<h3>Список товарів:</h3>";
    foreach ($products as $name => $price) {
        echo "$name: $price грн<br>";
    }
}

// Функція для визначення повідомлення про день тижня
function getDayMessage($day) {
    $messages = [
        "Monday" => "Понеділок – це твій новий початок!",
        "Friday" => "П’ятниця – час розслабитися!",
        "Sunday" => "Неділя – Відпочинок!",
    ];

    return $messages[$day] ?? "Звичайний день тижня.";
}

// Функція перевірки парності числа
function checkEvenOdd($x) {
    return ($x % 2 == 0) ? "$x є парним числом." : "$x є непарним числом.";
}

// Основна логіка виконання коду
$a = 5;
$b = 10;
$x = 15;
$products = [
    "Смартфон" => 15000,
    "Ноутбук" => 40000,
    "Навушники" => 2500
];

echo "<h3>Результати арифметичних операцій:</h3>";
foreach (calculateOperations($a, $b) as $operation => $result) {
    echo "$operation: $result<br>";
}

$daysOfWeek = getDaysOfWeek();
echo "<h3>Обрані дні тижня:</h3>";
echo "Третій день: " . $daysOfWeek[2] . "<br>";
echo "П'ятий день: " . $daysOfWeek[4] . "<br>";

displayProducts($products);

$day = "Monday";
echo "<h3>Повідомлення про день тижня:</h3>";
echo getDayMessage($day) . "<br>";

echo "<h3>Перевірка парності числа:</h3>";
echo checkEvenOdd($x) . "<br>";
?>
