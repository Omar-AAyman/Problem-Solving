<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    // Write your code here
    
    $space = " ";
    $hash = '#';
    // $n = 6;
    $k = 0;
    for ($i = ($n - 1); $i > -1; $i = $i - 1) {

        $S = str_repeat($space, $i);
        
        for ($k =$n-$i; $k < $n+1; $k++) {
            $H = (str_repeat($hash, $k) . "\n");
           
            break;
        }
        // echo $S . $H . "\n";
        echo $S.$H;
        // echo  ;

    }

}

$n = intval(trim(fgets(STDIN)));

staircase($n);
?>
<!-- 
Staircase detail

This is a staircase of size :

   #
  ##
 ###
####
Its base and height are both equal to . It is drawn using # symbols and spaces. The last line is not preceded by any spaces.

Write a program that prints a staircase of size .

Function Description

Complete the staircase function in the editor below.

staircase has the following parameter(s):

int n: an integer
Print

Print a staircase as described above.

Input Format

A single integer, , denoting the size of the staircase.

Constraints

 .

Output Format

Print a staircase of size  using # symbols and spaces.

Note: The last line must have  spaces in it.

Sample Input

6 
Sample Output

     #
    ##
   ###
  ####
 #####
######
Explanation

The staircase is right-aligned, composed of # symbols and spaces, and has a height and width of . -->