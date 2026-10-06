<?php
$products = array(
    array("name" => "Laptop", "price" => 1000, "quantity" => 5),
    array("name" => "Phone", "price" => 500, "quantity" => 10),
    array("name" => "Tablet", "price" => 300, "quantity" => 7)
);

foreach ($products as $product) {
    echo "Name: " . $product["name"] . "<br>";
    echo "Price: " . $product["price"] . "<br>";
    echo "Quantity: " . $product["quantity"] . "<br><br>";
}
