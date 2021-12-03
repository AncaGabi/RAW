<?php
echo "<h4>Testing if a string is or isn't a palindrom</h4><br>";

/*A palindrome is a word, number, phrase, or other sequence of characters which reads the same backward as forward, such as madam or racecar*/

$stringToTest="ana";

echo "String to be tested if it's a palindrom: <b>$stringToTest</b><br>";

//find out the reverse value of initial string
$reverse=strrev($stringToTest);
echo "The string in reverse order: <b>$reverse</b><br>";


//check if the string is a palindrom  (the initial string is egual with the reversed one)
//if the condition is true, print that the number is a palindrom
if($stringToTest==$reverse)
	{
	echo "Conclusion: <b>$stringToTest <i>is</i> a palindrome</b>"; 
    }
//otherwise print that the string is not a palindrom
else
	{
    
    echo "Conclusion: <b>$stringToTest <i>is not</i> a palindrome</b>"; 
    }
?> 

