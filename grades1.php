<?php
$grades = [75, 72, 73, 89, 90];

function calculateAverage($grades)
{
    $total = array_sum($grades);
    $average = $total / count($grades);

    return $average;
}


for ($i = 0; $i < count($grades); $i++) {
    echo "Subject " . $i + 1 . ":" . $grades[$i] .  "<br>";
}


echo calculateAverage($grades) . "<br>";


if (calculateAverage($grades) >= 75) {
    echo "Passed";
} else {
    echo "Failed";
}
