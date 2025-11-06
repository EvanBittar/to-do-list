<?php 

$templates = [
    ["emoji" => "📋", "title" => "Daily Grind"],
    ["emoji" => "🏢", "title" => "Office Hustle Board"],
    ["emoji" => "🛒", "title" => "Weekly Groove Shopping"],
    ["emoji" => "📚", "title" => "Study Sesh"],
    ["emoji" => "💪", "title" => "Fitness Goals"],
];

view('add.view.php', [
    'templates' => $templates
]);