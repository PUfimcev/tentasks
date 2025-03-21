<!--6. Recursive Digit Sum-->
<!--We define super digit of an integer using the following rules:-->
<!--Given an integer, we need to find the super digit of the integer.-->
<!--If x has only 1 digit, then its super digit is x.-->
<!--Otherwise, the super digit of x is equal to the super digit of the sum of the digits of x.-->
<!--1 For example, the super digit of 9875 will be calculated as:-->
<!--2-->
<!--3 super_digit(9875) 9+8+7+5 = 29-->
<!--4 super_digit(29) 2 + 9 = 11-->
<!--5 super_digit(11) 1 + 1 = 2-->
<!--6 super_digit(2) = 2-->
<!--7-->
<!--8 Return 2;-->
<!--9-->
<!--10 Function parameters: int $number;-->
<!--11 Returns: int;-->

<?php

/**
 * @param int $number
 * @return int
 */
function recursiveDiditSum(int $number): int
{
    if(strlen($number) === 1) return $number;

    $number .= "";
    $sum = 0;
    for ($i = 0; $i < strlen($number); $i++) {
        $sum += +$number[$i];
    }
    return recursiveDiditSum($sum);
}
?>

<h2>Recursive Digit Sum</h2>

<p><?php echo recursiveDiditSum(9875) ?></p>



