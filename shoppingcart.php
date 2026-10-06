<?php
$price = [50, 15, 25, 10, 8];
$product = ["Notebook", "Pen", "Folder", "Pencil", "Eraser"];


for ($i = 0; $i < count($price); $i++) {
    echo "Product " . ($i + 1) . " : " . $product[$i] . " - $" . $price[$i] . "<br>";
}

echo "<br>";

function calculateTotal($price)
{
    $total = array_sum($price);
    return $total;
}

$totalprice = calculateTotal($price);
echo "Total Price: $" . $totalprice . "<br>";

if ($totalprice >= 1000) {
    echo "You are eligible for a discount!<br>";
} else {
    echo "No discount<br>";
}
