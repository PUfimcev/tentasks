<!--3. Ice Cream Parlor-->
<!--Two friends like to pool their money and go to the ice cream parlor. They always choose two distinct flavors and they spend all of their-->
<!--money.-->
<!--Given a list of prices for the flavors of ice cream, select the two that will cost all of the money they have.-->
<!--1 Example:-->
<!--2-->
<!--3 m = 6-->
<!--4 costs = [1,3,4,5,6]-->
<!--5 The two flavors that cost 1 and 5 meet the criteria.-->
<!--6 Using 1-based indexing, they are at indices 1 and 4.-->
<!--7-->
<!--8 Function parameters: array $costs, int $amount_of_money;-->
<!--9 Returns: array of indexes;-->

<?php
function listChosenPrices(array $costs, int $amount_of_money): void
{
    $definedPrices = [];

    for ($i = 0; $i < count($costs); $i++) {
        for ($j = $i + 1; $j < count($costs); $j++) {
            $sum = $costs[$i] + $costs[$j];
            if ($sum === $amount_of_money) {
                $definedPrices['index1'] = $i + 1;
                $definedPrices['index2'] = $j + 1;
            }
        }
    }
    print_r($definedPrices);
}

?>

<h2>Ice Cream Parlor</h2>
<p><?php print_r([1, 3, 4, 5, 6]) ?></p>
<p><?php listChosenPrices([1, 3, 4, 5, 6], 6) ?></p>
