<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = ($_POST['name']);
    $favoriteFood = ($_POST['favoriteFood']);

    
    date_default_timezone_set("Asia/Kolkata");

   
    $currentHour = date('H');

  
    $greetings = [
        'morning' => [2, 11],
        'afternoon' => [11, 16],
        'evening' => [16, 21],
        'night' => [21, 23],
        'late night' => [0, 1]
    ];

   
    $greeting = "Hello";
    foreach ($greetings as $timeOfDay => $range) {
        if ($currentHour >= $range[0] && $currentHour < $range[1]) {
            $greeting = "Good $timeOfDay";
            break;
        }
    }

   
    echo "<div class='message'>";
    echo "$greeting, $name! Your favorite food is $favoriteFood.";
    echo "</div>";
}

require 'index.view.php'; 
?>
