<?php
include("PersonDOB.php");

$personDOB1 = new PersonDOB('1984-12-25');

echo "Age category: " . $personDOB1->getPlainTextAge() . "<br>";
echo "Mondays lived: " . $personDOB1->countWeekDays('Monday') . "<br>";

$personDOB2 = new PersonDOB('1989-11-08');

echo "Age category: " . $personDOB2->getPlainTextAge() . "<br>";
echo "Mondays lived: " . $personDOB2->countWeekDays('Friday') . "<br>";
