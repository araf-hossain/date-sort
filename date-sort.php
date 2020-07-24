<?php

$date = ['2020-08-01','2020-10-10','2020-08-14','2020-08-15','2020-11-11','2020-11-01'];

function cmp($a, $b) {
    if ($a == $b) return 0;
      
    return (strtotime($a) < strtotime($b))? -1 : 1;
}
uasort($date, "cmp");

echo "<pre>";
print_r($date);
