<?php

$fruits = ["Apple", "Banana", "Orange", "Grapes", "Mango"];

echo "<h2>List of Fruits</h2>";

echo "<ul>";
foreach($fruits as $fruit){
    echo "<li>".$fruit."</li>";
}

echo "</ul>";