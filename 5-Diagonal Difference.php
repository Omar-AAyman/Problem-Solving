<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    //  $ar = [[11, 2, 4], [4, 5, 6], [10, 8, -12]]; //
    $sum1 = 0;
    $sum2 = 0;



    //  Function 1
    for ($n1 = 0; $n1 < (count($arr)); $n1 += 1) {
        for ($n2 = $n1; $n2 <  (count($arr[$n1])); $n2 += 1) {
            break;
        }
        $sum1 += $arr[$n1][$n2]; //19        
    }
    // echo $sum1;
    // ...................................
    //  Function 2

    for ($n1 = 0; $n1 < (count($arr)); $n1 += 1) {

        for ($n2 = ((count($arr[$n1]) - 1) - $n1); 0 <= $n2; $n2 -= 1) {
            // echo $n1;
            // echo $n2;
            break;
        }
        $sum2 += $arr[$n1][$n2]; //19        
    }
    // echo $sum2;

    $x = abs($sum1 - $sum2);
    return $x;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
?>

<!-- Description -->

<!-- Given a square matrix, calculate the absolute difference between the sums of its diagonals.

For example, the square matrix  is shown below:

1 2 3
4 5 6
9 8 9  
The left-to-right diagonal = . The right to left diagonal = . Their absolute difference is .

Function description

Complete the  function in the editor below.

diagonalDifference takes the following parameter:

int arr[n][m]: an array of integers
Return

int: the absolute diagonal difference
Input Format

The first line contains a single integer, , the number of rows and columns in the square matrix .
Each of the next  lines describes a row, , and consists of  space-separated integers .

Constraints

Output Format

Return the absolute difference between the sums of the matrix's two diagonals as a single integer.

Sample Input

3
11 2 4
4 5 6
10 8 -12
Sample Output

15
Explanation

The primary diagonal is:

11
   5
     -12
Sum across the primary diagonal: 11 + 5 - 12 = 4

The secondary diagonal is:

     4
   5
10
Sum across the secondary diagonal: 4 + 5 + 10 = 19
Difference: |4 - 19| = 15

Note: |x| is the absolute value of x -->