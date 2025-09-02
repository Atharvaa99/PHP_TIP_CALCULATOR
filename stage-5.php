<?php
// Read input
/*
$appName = trim(fgets(STDIN));
echo "Welcome to the $appName!";
*/

$billAmount = (float)(fgets(STDIN));
$tipPercentage = (int)(fgets(STDIN));
$numberOfPeople = (int)(fgets(STDIN));

echo "Original Bill: $$billAmount\n";
//echo "Tip Percentage: $tipPercentage%\n";
//echo "Number of People: $numberOfPeople\n";

$tipAmount = ($billAmount * $tipPercentage) / 100;
echo "Tip Amount: $$tipAmount\n";

$totalBill = $billAmount + $tipAmount;
echo "Total Bill: $$totalBill\n";

$amountPerPerson = $totalBill / $numberOfPeople;
echo "Split $numberOfPeople ways: $$amountPerPerson per person";

?>