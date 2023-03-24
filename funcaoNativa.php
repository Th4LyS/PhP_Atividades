<?php
$customDate = '2023/03/24';
$time = strtotime($customDate);
function getDayOfTheWeek($time) {
$daysOfTheWeek = ['Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado', 'Domingo'];
$dayIndex = intval(date('N', $time)) - 1;
return $daysOfTheWeek[$dayIndex];
}
$date = date("d/m/Y - ", $time);
echo $date . getDayOfTheWeek($time);