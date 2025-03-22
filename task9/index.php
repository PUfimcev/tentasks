<!--9. Birthday Cake Candles-->
<!--You are in charge of the cake for a child's birthday. It will have one candle for each year of their total age. They will only be able to blow out-->
<!--the tallest of the candles. Your task is to count how many candles are the tallest.-->
<!--1 Example:-->
<!--2-->
<!--4-->
<!--3 candels = [4,4,1,3]-->
<!--5 The tallest candles are 4 units high.-->
<!--6 There are 2 candles with this height, so the function should return 2.-->


<?php

function calcTollCandles(array $array): int
{
    return count(array_filter($array, function ($item) use ($array) {
        return $item === max($array);
    }));
}

?>

<h2>Birthday Cake Candles</h2>
<p><?php echo calcTollCandles([4, 4, 1, 3]) ?></p>
