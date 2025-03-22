<!--10. Time Conversion-->
<!--Given a time in 12-hour AM/PM format, convert it to military (24-hour) time.-->
<!--Note: - 12:00:00AM on a 12-hour clock is 00:00:00 on a 24-hour clock.-->
<!--12:00:00PM on a 12-hour clock is 12:00:00 on a 24-hour clock.-->
<!--1 Example:-->
<!--2-->
<!--3 s = '12:01:00PM'.-->
<!--4 Return '12:01:00'.-->
<!--5-->
<!--6 s = '12:01:00AM'.-->
<!--7 Return '00:01:00'.-->

<?php
    function convertTime(array $array): void
    {
        foreach ($array as  $value) {

            $value = new DateTime($value)->format('H:i:s');
            echo nl2br("$value\n");
        }
    }
?>

<h2>Time Conversion</h2>
<p><?php  convertTime(['12:01:00PM', '12:01:00AM'])  ?></p>

