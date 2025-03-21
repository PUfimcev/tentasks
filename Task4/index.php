<!--4. Missing Numbers-->
<!--Given two arrays of integers, find which elements in the second array are missing from the first array.-->
<!--1 Example:-->
<!--2-->
<!--3 arr = [7,2,5,3,5,3]-->
<!--4 brr = [7,2,5,4,6,3,5,3]-->
<!--5-->
<!--6 The brr array is the orginal list. The numbers missing are [4,6].-->
<!--7-->
<!--8 Function parameters: array $array1, array $array2;-->
<!--9 Returns: array of missing numbers;-->

<?php
$arr = [7,2,5,3,5,3];
$brr = [7,2,5,4,6,3,5,3];
function missingNumbers($array1, $array2): array
{
    return array_diff($array1, $array2);
}

?>

<h2>Missing Numbers</h2>
<p><?php echo implode(', ',missingNumbers($brr, $arr), ) ?></p>
