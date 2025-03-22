<!--7. Diagonal Difference-->
<!--Given a square matrix, calculate the absolute difference between the sums of its diagonals.-->
<!--1 For example, the square matrix is shown below:-->
<!--2-->
<!--3 1 2 3-->
<!--4 4 5 6-->
<!--5 9 8 9-->
<!--6 The left-to-right diagonal = 1+5+9 = 15.-->
<!--7 The right-to-left diagonal = 3+5+9 = 17.-->
<!--8 Their absolute difference is |15 - 17| = 2.-->
<!--9-->
<!--10 Function parameters: array $array;-->

<?php
$arr = [
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9]
];

/**
 * @param array $array
 * @return int
 */
function sums(array $array): int
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) $sum += $array[$i][$i];
    return $sum;
}

/**
 * @param array $array
 * @param $cbfunc callback function
 * @return int
 */
function diagonalDifference(array $array, $cbfunc): int
{
    $sum1 = call_user_func($cbfunc, $array);
    $sum2 = call_user_func($cbfunc, array_reverse($array));

    return abs($sum1 - $sum2);
}


?>

<h2>Diagonal Difference</h2>
<p><?php echo diagonalDifference($arr, 'sums') ?></p>