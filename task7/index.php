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


/**
 * @param array $array
 * @return int
 */
function sums(array $array): int
{
    $sum = 0;
    $i = 0;
    foreach ($array as $value) {
        foreach ($value as $key2 => $value2) {
            if ($key2 === $i) $sum += $value2;
        }
        $i++;
    }
    return $sum;
}

/**
 * @param array $array
 * @return int
 */
function diagonalDifference(array $array): int
{
    $sum1 = 0;
    $sum2 = 0;
    if (count($array) ** 2 + count($array) === count($array, COUNT_RECURSIVE)) {
        $sum1 = sums($array);
        $sum2 = sums(array_reverse($array));
    }
    return abs($sum1 - $sum2);
}

?>

<h2>Diagonal Difference</h2>
<p><?php $arr = [
        [1, 2, 3],
        [4, 5, 6],
        [9, 8, 9]
    ];
    echo diagonalDifference($arr) ?></p>