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

