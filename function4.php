<?php
function sum($marksarray)
{   $sum=0;
    foreach($marksarray as $value)
    {
        $sum += $value;
    }
    return $value;
}
$marks=[12,12,12];
$summarks=sum($marks);
echo "$summarks";




?>