﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Календарь</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<br>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="month"><b>Выбери месяц:</b> </label>
    <input type="number" name="month" min="1" max="12" class="stroka" required>

    <label for="year"><b>Год:</b> </label>
    <input type="number" name="year" class="stroka" required>

    <input type="submit" class="knopka" value="Продолжить">
</form>
<br>
<br>

<?php
function generateCalendar($month = null, $year = null)
{
    if ($month === null || $year === null) {
        $month = date('n');
        $year = date('Y');
    }

    $firstDay = new DateTime("$year-$month-01");
    $lastDay = new DateTime("$year-$month-" . $firstDay->format('t'));  //метод format('t') для получения количества дней в месяце.

    echo "<h2>" . $firstDay->format("F Y") . "</h2>"; 

    echo "<table>";  
    echo "<tr><th>Пн</th><th>Вт</th><th>Ср</th><th>Чт</th><th>Пт</th><th class='weekend'>Сб</th><th class='weekend'>Вс</th></tr>";

    $firstDayOfWeek = $firstDay->format('N') - 1;
    echo "<tr>";
    for ($i = 0; $i < $firstDayOfWeek; $i++) {
        echo "<td></td>";
    }                                                         //для "выравнивания" ячеек   

    $currentDay = clone $firstDay;
    while ($currentDay <= $lastDay) {      
        if ($currentDay->format('N') == 1) {
            echo "</tr><tr>";
        }  

        $class = '';
        if (in_array($currentDay->format("N"), [6, 7])) {
            $class = 'weekend';
        }  
        if ($currentDay->format("n") == $month && isHoliday($currentDay)) {
            $class .= 'holiday';
        }

        echo "<td class='$class'>" . $currentDay->format("j") . "</td>";

        $currentDay->add(new DateInterval('P1D'));
    }                                                                         

    $lastDayOfWeek = $currentDay->format('N') - 1;
    for ($i = 0; $i < (7 - $lastDayOfWeek) % 7; $i++) {
        echo "<td></td>";
    }

    echo "</tr>";
    echo "</table>";
}

function isHoliday(DateTime $date)
{
    $holidays = [
        '01-01', '01-02', '01-03', '01-04', '01-05', '01-06', '01-07','01-08', '02-23','03-08', '05-01', '05-02', '05-03', '05-09', '06-01','11-06', '12-31',
    ];
    return in_array($date->format('m-d'), $holidays);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMonth = $_POST["month"];
    $userYear = $_POST["year"];
    generateCalendar($userMonth, $userYear);
} else {
    generateCalendar();
}
?>
</body>
</html>
