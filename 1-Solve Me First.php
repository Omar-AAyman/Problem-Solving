<?php

function solveMeFirst($a,$b){
  // Hint: Type return $a + $b; below  
  return($a+$b);
}

$handle = fopen ("php://stdin","r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);
print ($sum);
fclose($handle);
?>

<!-- Description -->

<!-- Complete the function solveMeFirst to compute the sum of two integers.

Example


Return .

Function Description

Complete the solveMeFirst function in the editor below.

solveMeFirst has the following parameters:

int a: the first value
int b: the second value
Returns
- int: the sum of  and 

Constraints


Sample Input

a = 2
b = 3
Sample Output

5
Explanation

.2+3=5 -->