#Outline
Function should analyze that every scope inside string is closed, and in proper order as well.
#Requirement
Output should be another array with the result for each string like
```
$output = array(‘NO’,’YES’)
```
#Examples:
String ‘{(})’ gives ‘NO’ in output array
String ‘[()]’ gives ‘YES’ in output array.