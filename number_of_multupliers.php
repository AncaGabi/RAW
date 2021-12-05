<?php
echo "<h4> Calculate the number of values in an array that are a multiplier of either 4 or 6 (or both)</h4><br>";

//create function
function calculateNumberOfMultipliers($arrayOfNumbers){


	//calculte the number of elements in the array
    $arrlength = count($arrayOfNumbers);  
    
    echo "<br><b>The array is:</b> ";
       
    //for each element of the array: print the element and check if it is a multiplier of 4 or 6
	for($i = 0; $i < $arrlength; $i++) {
		echo "$arrayOfNumbers[$i]   ";
		
        /*if the element of the array is numeric and can be divided by 4 (the rest of the division is 0), count it (incrementation)*/
        if(is_numeric($arrayOfNumbers[$i])) {
    	  	
         	if($arrayOfNumbers[$i]%4==0) {
				$numberOfMultipliers++;
            	}
            
      		/* else (only if it isn't already divisible by 4) if the element of the array is numeric and can be divided by 6, count it */
    		elseif($arrayOfNumbers[$i]%6==0) {
				$numberOfMultipliers++;
           		}
             
   		 }
    }
	echo "<br>";
    
    
    //print the number of values in an array that are a multiplier of either 4 or 6 (or both)
    if($numberOfMultipliers!=0) {
        echo "<b>The number of values in an array that are a multiplier of either 4 or 6 (or both):</b> $numberOfMultipliers <br>";
        }
   	else {
        echo "<b>The number of values in an array that are a multiplier of either 4 or 6 (or both):</b> 0 	 <br>";
        }
            
            
           
}    
 
//positive testing 
 
//number of multipliers of 6
//define array  
$arrayOfNumbers= array(6, 18.0, -36);
//call function
calculateNumberOfMultipliers($arrayOfNumbers);

//number of multipliers of 4
$arrayOfNumbers= array(4, -16, 0.20);
calculateNumberOfMultipliers($arrayOfNumbers);

//number of multipliers of 4 and 6 (counted only once)  
$arrayOfNumbers= array(0,12, -60, 600.24);
calculateNumberOfMultipliers($arrayOfNumbers);

//number of multipliers of 4 and 6 (long array)
$arrayOfNumbers= array(0,6,13,c,hyte,-21,25,36,40,01,60,66,44,40,48,50,60,66,72,76,80,84,92,-500,320.06,120,160,180,abv,220,320,800,888," ",null,4,15,12,19,35,30,24,444,600,alabala,6,13,25,36,40,01,60,66,44,40,48,50,60,66,72,76,80,84,92,-500,320.06,120,160,180,abv,220,320,800,888," ",null, 4,15,12,19,35,30,24,444,600,alabala);
calculateNumberOfMultipliers($arrayOfNumbers);



//negative testing 

//numbers that are not 4 or 6 multipliers are not counted
$arrayOfNumbers= array(1, 5.1, -379);
calculateNumberOfMultipliers($arrayOfNumbers);

//NULL value is not counted 
$arrayOfNumbers= array(NULL);
calculateNumberOfMultipliers($arrayOfNumbers);

//empty value is not cpunted
$arrayOfNumbers= array("  ");
calculateNumberOfMultipliers($arrayOfNumbers); 

//alphanumeric values are not counted 
$arrayOfNumbers= array(abv3);
calculateNumberOfMultipliers($arrayOfNumbers); 


//boolean values are not counted 
$arrayOfNumbers= array(true);
calculateNumberOfMultipliers($arrayOfNumbers); 


//special characters are not counted
$arrayOfNumbers= array("/&^%");
calculateNumberOfMultipliers($arrayOfNumbers); 

?> 

