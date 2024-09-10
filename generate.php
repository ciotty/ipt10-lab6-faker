<?php

require 'FileUtility.php';
require 'Random.php';

$random = new Random();
$people = $random->generatePeople(300);

// Convert people array to CSV format
$csvData = "UUID,Title,First Name,Last Name,Street Address,Barangay,Municipality,Province,Country,Phone Number,Mobile Number,Company Name,Company Website,Job Title,Favorite Color,Birthdate,Email Address,Password\n";
foreach ($people as $person) {
    $csvData .= implode(',', array_map('str_replace', ['"', ','], ['""', '\,'], $person)) . "\n";
}

// Save CSV data to file
FileUtility::writeToFile('persons.csv', $csvData);

echo "Data generated and saved to persons.csv";
?>
