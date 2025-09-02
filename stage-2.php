<?php
// Read input
/*
$appName = trim(fgets(STDIN));
echo "Welcome to the $appName!";
*/

$billAmount = (float)(fgets(STDIN));
$tipPercentage = (int)(fgets(STDIN));
$numberOfPeople = (int)(fgets(STDIN));

echo "Bill Information Collected:\n";
echo "Bill Amount: $$billAmount\n";
echo "Tip Percentage: $tipPercentage%\n";
echo "Number of People: $numberOfPeople\n";


// Output the welcome message
echo $welcomeMessage;
?>