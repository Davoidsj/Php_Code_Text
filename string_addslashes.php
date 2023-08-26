<?php


$str = "Hello I am Yahoo baba";

$newStr = addcslashes($str,"A..Z");


echo stripcslashes($newStr);


?>