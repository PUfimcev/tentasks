<!--8. Plus Minus-->
<!--Given an array of integers, calculate the ratios of its elements that are positive, negative and zero. Print the decimal value of each fraction-->
<!--on a new line with 6 places after the decimal.-->
<!--1 Example:-->
<!--2-->
<!--3 arr=[1,1,0,-1,-1]-->
<!--4-->
<!--5 There are n=5 elements: two positive, two negative and one zero.-->
<!--6 Their ratios are 2/5=0.400000, 2/5=0.400000 and 1/5=0.200000.-->
<!--7 Results are printed as:-->
<!--8-->
<!--9 0.400000-->
<!--10 0.400000-->
<!--11 0.200000-->
<!--12-->
<!--13 Function parameters: array $array;-->
<!--14 Returns: void;-->


<?php

/**
 * @param array $array
 * @return array
 */
function handleArray(array $array): array
{
    $generalAmount = count($array);
    $amountPos = 0;
    $amountNeg = 0;
    $amountZero = 0;

    foreach ($array as $item) {
        if ($item > 0) $amountPos++;
        if ($item < 0) $amountNeg++;
        if ($item === 0) $amountZero++;
    }

    return array(
        $generalAmount,
        $amountPos,
        $amountNeg,
        $amountZero
    );
}


/**
 * @param array $array
 * @param $callback
 * @return void
 */
function ratioProsCons(array $array): void
{
    list($generalAmount, $amountPos, $amountNeg, $amountZero) = handleArray($array);

    $ratioPos = (!empty($amountPos)) ? number_format($amountPos / $generalAmount, 6) : '';
    $ratioNeg = (!empty($amountNeg)) ? number_format($amountNeg / $generalAmount, 6) : '';
    $ratioZero = (!empty($amountZero)) ? number_format($amountZero / $generalAmount, 6) : '';
    foreach ([$ratioPos, $ratioNeg, $ratioZero] as $ratio) {
        echo nl2br("$ratio\n");
    }
}

?>

<h2>Plus Minus</h2>
<p><?php ratioProsCons([1, 1, 0, -1, -1]) ?></p>


