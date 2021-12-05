<?php
echo "<h2>Testing if a string is or isn't a palindrom</h2><br>";

//define function
function checkIfPalindrom($stringToTest){

/*A palindrome is a word, number, phrase, or other sequence of characters which reads the same backward as forward, such 	as madam or racecar*/

	// check if the string is null or empty
    //if the condition is true, display a proper message
	if (is_null($stringToTest)||(strlen($stringToTest)==substr_count($stringToTest," ")))  
        {  
        echo "String is  NULL or empty - cannot check if it's a palindrome<br>";  
        }  
    // else check if the string is or isn't a palindrome 
	else {
		echo "String to be tested if it's a palindrom: <b>$stringToTest</b><br>";

		//find out the reverse value of initial string using predefined function and print it
		$reverse=strrev($stringToTest);
		echo "The string in reverse order: <b>$reverse</b><br>";


		/*check if the string is a palindrom  (using the predifined function to compare the initial string with the 			reversed one - case-insensitive)*/
    
		//if the condition is true, print that the number is a palindrom
		if (strcasecmp($stringToTest,$reverse)==0)
    		{
			echo "Conclusion: <b>the string <i>is</i> a palindrome</b>"; 
  		  }
		
        //else print that the string is not a palindrom
		else
			{
    
   		 echo "Conclusion: <b>the string <i>is not</i> a palindrome</b>"; 
   		 }  

	echo "<br><br>";
	}
}    
 
//call function with different values

//positive testing
checkIfPalindrom(racecar);		// odd number of characters
checkIfPalindrom(anna);  		// even number of characters
checkIfPalindrom(Ana);  		//upper and lower case letters
checkIfPalindrom("ma 1!?!1 am"); // special characters
checkIfPalindrom(aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa); //long string

//negative testing
checkIfPalindrom(car);			// odd number of characters
checkIfPalindrom(mama);			// even number of characters
checkIfPalindrom(Anca); 		// even number of characters
checkIfPalindrom("ma 21!?!1 am"); //upper and lower case letters
checkIfPalindrom(baaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa); //long string
checkIfPalindrom(" "); 			//empty string
checkIfPalindrom(NULL); 		//null string

?>  
