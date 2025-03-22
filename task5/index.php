<!--5. Sherlock and Array-->
<!--Watson gives Sherlock an array of integers. His challenge is to find an element of the array such that the sum of all elements to the left is-->
<!--equal to the sum of all elements to the right.-->
<!--1 Example:-->
<!--2-->
<!--3 arr = [5,6,8,11]-->
<!--4-->
<!--5 8 is between two subarrays that sum to 11.-->
<!--6 arr = [1]-->
<!--7-->
<!--8 The answer is 1 since left and right sum to 0.-->
<!--9-->
<!--10 Function parameters: array $array;-->
<!--11 Returns: index of found element or false;-->

<?php
/**
 * @param array $array
 * @return int|string
 */
function indexOfElement(array $array): int|string
{
    $indexElement = null;
    $i = 1;

    while ($i < count($array)) {
        $leftSum = array_sum(array_slice($array, 0, $i));
        $rightSum = array_sum(array_slice($array, $i + 1));
        if ($leftSum === $rightSum) {
            $indexElement = $i;
            break;
        } else {
            $indexElement = "false";
        }
        $i++;
    }
    return $indexElement;
}

?>

<h2>Sherlock and Array</h2>

<p><?php echo indexOfElement([5, 6, 8, 11]) ?></p>
