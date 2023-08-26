<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Associative Array</title>

    <style>


table{
    text-align: center;
border-collapse: collapse;
margin: 80px auto;
font-size: 20px;
}
tr,th,td{

border:2px solid #000;
margin:25px;
padding: 30px;
font-weight: bold;
}


tr:first-child{
    background-color: #2329F2 ;
    color:#fff;
}

tr:nth-child(4n+2), tr:nth-child(4n+6) {
    background-color: #7E92F2;

}


    </style>
</head>
<body>
    







<?php



$student = [

"Labib"=>[
    "Physics"=>89,
    "Chemistry"=>87,
    "Higher Math"=>94

],

"Rahat"=>[

    "Physics"=>90,
    "Chemistry"=>84,
    "Higher Math"=>97

],

"Saad"=>[

 "Physics"=>96,
    "Chemistry"=>83,
    "Higher Math"=>99



]







];


$newArray = array_keys($student['Labib']);




echo '<table>';
echo '<tr>';
echo '<th>Student Name</th>';
foreach($newArray as $key => $value)
echo "<th>$value</th>";
echo '</tr>';

foreach($student as $key=>$v1){
echo '<tr>'.'<td>'.$key.'</td>';
foreach($v1 as $v2)
echo '<td>'.$v2.'</td>';

echo "<tr/>";


}





?>
</body>
</html>