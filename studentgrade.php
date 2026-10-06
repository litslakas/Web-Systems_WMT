<?php
$grades = [76, 72, 78, 79, 89];


//Depending on the count of the array, you may need to adjust the loop limit
for ($i = 0; $i < 4; $i++) {
    echo "Subject: " . ($i + 1) . ": " . $grades[$i] . "<br>";
}
echo "<br>";


function calculateAverage($grades)
{

    $total = array_sum($grades);
    $count = count($grades);

    return $total / $count;
}

calculateAverage($grades);

$average = calculateAverage($grades);
echo "Average: " . $average . "<br>";

if ($average >= 75) {
    echo "Congratulations you have Pass";
} else {
    echo "Better Luck Next Time. You have Fail";
}
