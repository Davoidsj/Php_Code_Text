<?php

$colors = [
    
    "shirt"=>"red ",
    "pant"=>"yellow ",
    "cap"=>"green",
   "hat"=>"orange"


];


echo '<ol style="list-style-type:lower-greek;">';


foreach($colors as $item=>$val)
print "<li>$item = $val</li>";


echo "</ol>";




?>