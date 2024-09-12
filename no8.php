<?php 
$array1 = ["pplg","htl","kln","pmn","pplg","htl"];
$combined_array = array_merge($array1);

$unique_array = array_unique($combined_array);
arsort($unique_array);

foreach($unique_array as $value)
echo $value. "\n";
