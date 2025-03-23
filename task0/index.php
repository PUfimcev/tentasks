
<!--1. Min Max Sum-->
<!--Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers.-->
<!--Then print the respective minimum and maximum values as a single line of two space-separated long integers.-->
<!--1 Example:-->
<!--2-->
<!--3 arr = [1,3,5,6,7];-->
<!--4 The minimum sum is 1+3+5+6 = 15 and the maximum sum is 3+5+6+7 = 21.-->
<!--5 The function prints-->
<!--6-->
<!--7 15 21-->
<!--8-->
<!--9 Function parameters: array $array;-->
<!--10 Returns: int;-->

<?php
    function sum(array $array, bool $is_min_sum): int
    {
        ($is_min_sum) ? sort($array) : rsort($array);
        return array_sum(array_slice($array, 0, 4));
    }
    function summingMinMax(array $array): int|string
    {
        $min = sum($array, true);
        $max = sum($array, false);
        return "$min $max";
    }
?>

<h2>Min Max Sum</h2>
<p><?php echo summingMinMax([1,3,5,6,7]) ?></p>
