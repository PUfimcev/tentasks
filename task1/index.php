<?php
//2. Sum of array elements
//Write a function that takes an array of numbers as an argument and returns the sum of the elements of the array.
//1 Example:
//2
//3 ar = [1,2,3]
//4 1 + 2 + 3 = 6
//5
//6 Function parameters: array $array;
//7 Returns: int;

function sumArrayNumber(array $array): int
{
    return array_reduce($array, function ($carry, $item) {
        return $carry + $item;
    });
}

?>

<h2>Sum of array elements</h2>
<p><?php echo sumArrayNumber([1,2,3])  ?></p>

