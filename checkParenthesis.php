<?php

// Function should analyze that every scope inside string is closed, and in proper order as well.
// Output should be another array with the result for each string like
// $output = array(‘NO’,’YES’)
// Examples:
// String ‘{(})’ gives ‘NO’ in output array
// String ‘[()]’ gives ‘YES’ in output array.

$input = array('[{((){}}()}]','[()]');

$output = array_map(function($values) {
    $arrBrackets = [];
    
    for($i=0; $i<strlen($values); $i++) 
        if ($values[$i] === "(" || $values[$i] === "{" || $values[$i] === "[") {
            //add the opening parenthesis to the array
            array_unshift($arrBrackets, $values[$i]);
        
        } elseif ($values[$i] === ")") {
            //if no matching opening parenthesis then return NO
            if (array_shift($arrBrackets) !== "(") return 'NO';
        
        } elseif ($values[$i] === "}") {
            //if no matching opening parenthesis then return NO
            if (array_shift($arrBrackets) !== "{") return 'NO';
        
        } elseif ($values[$i] === "]") {
            //if no matching opening parenthesis then return NO
            if (array_shift($arrBrackets) !== "[")  return 'NO';
        
        }   
        //if both opening and closing parenthesis were found and then every scope has been closed        
        if (count($arrBrackets) === 0) return 'YES';

}, $input);

var_dump($output);

?>