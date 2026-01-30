<?php
// PHP Variables and Data Types
// This file is part of my WordPress + PHP learning journey

// String variable
$name = "Vansh Agrawal";

// Integer variable
$age = 20;

// Float variable
$cgpa = 9.1;

// Boolean variable
$isStudent = true;

// Array
$skills = array("PHP", "WordPress", "JavaScript");

// Associative Array
$profile = array(
    "name" => $name,
    "role" => "B.Tech CSE Student",
    "learning" => "WordPress Development"
);

// Function example
function introduce($profile) {
    return "Hi, I am " . $profile["name"] . 
           " and I am learning " . $profile["learning"];
}

// Output
echo introduce($profile);
