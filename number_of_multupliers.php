<?php
echo "<h4> Calculating the number of values in an array that are a multiplier of either 4 or 6 (or both)</h4><br>";

//create function
function calculateNumberOfMultipliers($arrayOfNumbers){

	//calculte the number of elements in the array
    $arrlength = count($arrayOfNumbers);  
    
    echo "<br><b>The array is:</b> ";
       
    //for each element of the array: print the element and check if it is a multiplier of 4 or 6
	for($i = 0; $i < $arrlength; $i++) {
		echo "$arrayOfNumbers[$i]   ";
		
        //if the element of the array can be divided by 4 (the rest of the division is 0), count it (incrementation)
        if($arrayOfNumbers[$i]%4==0)
			{
			$numberOfMultipliers++;
            }
            
        /* else (only if it isn't already divisible by 4) if the element of the array can be divided by 6, count it */
    	elseif($arrayOfNumbers[$i]%6==0)
			{
			$numberOfMultipliers++;
            }
    }
	echo "<br>";
    
    
    //print the number of values in an array that are a multiplier of either 4 or 6 (or both)
    echo "<b>The number of values in an array that are a multiplier of either 4 or 6 (or both):</b> $numberOfMultipliers 	 <br>";
}    
 
 
//define array  
$arrayOfNumbers= array(4,15,12,19,35,30,24,444,600);
//call function
calculateNumberOfMultipliers($arrayOfNumbers);


//define array 
$arrayOfNumbers= array(4,6,24,15,4);
//call function
calculateNumberOfMultipliers($arrayOfNumbers);


//define array 
$arrayOfNumbers= array(6,13,25,36,40,60,66,44,40,48,50,60,66,72,76,80,84,92,120,160,180,220,320,800,888);
//call function
calculateNumberOfMultipliers($arrayOfNumbers);
?> 

