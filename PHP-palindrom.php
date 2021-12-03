<?php
echo "<h4>Testing if a string is or isn't a palindrom</h4><br>";

$stringToTest="ana";

echo "String to test if it's a palindrom: <b>$stringToTest</b><br>";
$reverse=strrev($stringToTest);
echo "The string in reverse order: <b>$reverse</b><br>";

if($stringToTest==$reverse)
	{
	echo "Conclusion: <b>$stringToTest is a palindrome</b>"; 
    }

else
	{
    echo "Conclusion: <b>$stringToTest is <i>not</i> a palindrome</b>"; 
    }
?> 
