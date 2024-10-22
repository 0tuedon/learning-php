<?php 
echo abs(-10);
echo "<br/>";
echo round(3.455, 2);
echo "<br/>";

echo ceil(3.65);
echo "<br/>";
echo floor(3.65);
echo "<br/>";

echo min([1,2,3,4,5,7]);
echo "<br/>";

echo max([1,2,3,4,5,0]);
echo "<br/>";

echo sqrt(16);
echo "<br/>";

echo pow(10,8);
echo "<br/>";

echo rand(1,1000);
echo "<br/>";



//  strings 
$store = "Hello, World!";
echo strlen($store);
echo "<br/>";
echo strtoupper($store);
echo "<br/>";
echo strtolower($store);
echo "<br/>";
echo strpos($store, "World");
echo "<br/>";
echo str_replace("W", "Y", $store);
echo "<br/>";
echo $store;
echo "<br/>";

// Arrays 
echo "<b>Array Built in </b> ";
echo "<br/>";
$array_example = ["Sugar", "Banana", "Oat", "Mango"];
echo array_pop($array_example);
echo "<br/>";
echo array_push($array_example, "Love");
echo "<br/>";

$merge_array = array_merge($array_example, ["TT", "ST", "TT", "TT", "TT"]);
$key_array = ["job"=>"sofware engineer", "name"=> "tuedon"];
print_r($merge_array);

echo "<br/>";
echo in_array("TT", $merge_array);

echo "<br/>";

sort($merge_array);

print_r($merge_array);

ksort($key_array);

