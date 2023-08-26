<?php



function square($n,$m){
    return [$n=>$m];
}



$b = ['lemon','banana','apple','guava'];

$newArray = array_map(null,$a,$b);


echo '<pre>';
print_r($newArray);
echo '</pre>';


?>