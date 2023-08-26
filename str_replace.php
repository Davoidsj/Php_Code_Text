<?php


$str = "I love php.I love sql too.";

$array = array(
    "php"=>'Java',
    "sql"=>'Perl'
);
echo strtr($str,$array);


?>