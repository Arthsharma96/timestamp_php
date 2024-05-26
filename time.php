<?php

echo "The hour is: " . date('h') . "----------->in normal format" . '<br>';
echo "The Hour is: " . date('H') . "----------->in 24-hour format" . '<br>' ;

// for minutes
echo date('i') . '<br>';
// for seconds
echo date('s') . '<br>';
// for meridiem
echo date('a') . '<br>';
echo date('A') . '<br>';

// now to combine all this:
echo "date and time :" .  date('d-m-Y h:i:sa') . '<br>';

// now to change the timezone:
// becuz php default shows its server time:(which is basically a Europe timezone)
date_default_timezone_set("Asia/Kolkata");
echo "date and time :after changing the timezone:" .  date('d-m-Y h:i:sa') . '<br>';

?>