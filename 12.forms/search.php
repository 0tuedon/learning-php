<?php 

if($_SERVER["REQUEST_METHOD"]  === "GET"){
    $search = htmlspecialchars(trim($_GET["query"]));

    if(!empty($search)){
        echo "Search: ". $search;
    }
}