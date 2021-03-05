<?php
//Example using CURL Library
//Developer : Hatem Ghaly
//Mobile : +201148699647
//My Profile : https://www.linkedin.com/in/hatem-mohammed-ghaly-05610288/
$url="www.mans.edu.eg";
$init=curl_init(); // Curl Init
curl_setopt($init,CURLOPT_URL,$url); // connect to the server
curl_setopt($init,CURLOPT_RETURNTRANSFER,$init); //Get data from the server
curl_setopt($init,CURLOPT_HEADER,$init); // get header of the server
$output=curl_exec($init); // execute curl library
$getInfo=curl_getinfo($init); // get information of the server of site
print_r(json_encode($getInfo)); // print the information

?>