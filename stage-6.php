<?php
echo "========================================\n";
echo "    Welcome to the TIP CALCULATOR!   \n";
echo "========================================\n\n";
echo "Input the following Billing Information in Sequnce as mentioned:\n1. Bill Amonunt\n2. Tip Percentage\n3. Number Of People\n\n";
echo "========================================\n";
$billAmount = (float)(fgets(STDIN));
$tipPercentage = (int)(fgets(STDIN));
$numberOfPeople = (int)(fgets(STDIN));

$tipAmount = ($billAmount * $tipPercentage) / 100;
$totalBill = $billAmount + $tipAmount;
$amountPerPerson = $totalBill / $numberOfPeople;
echo "\n============= BILL SUMMARY =============\n";
echo "   Original Bill: $$billAmount\n";
echo "   Tip ($tipPercentage%): $$tipAmount\n";
echo "----------------------------------------\n";
echo "   Total Amount: $$totalBill\n";
echo "   Split $numberOfPeople ways: $$amountPerPerson per person.\n";
echo "========================================\n";
?>