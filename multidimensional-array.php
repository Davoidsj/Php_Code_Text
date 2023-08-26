<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
    background-color: #9732EF ;
    color:#fff;
}

tr:nth-child(2n+2){
    background-color: #F2A4CD;

}


    </style>
</head>
<body>





    


<?php

$emp = [

    ["id"=>1,
    "name"=>"Harry Potter",
    "job"=>"Manager",
    "salary"=>50000],
    
    ["id"=>2,
    "name"=>"Joseph James Costa",
    "job"=>"Salesman",
    "salary"=>33000],
    
    ["id"=>3,
    "name"=>"Nicholas Andrew Smith ",
    "job"=>"System Architect",
    "salary"=>90000],
    
    ["id"=>4,
    "name"=>"Robert Powell",
    "job"=>"Web Developer",
    "salary"=>83000],
    
    ["id"=>1,
    "name"=>"Henry Milan Hooke",
    "job"=>"Network Engineer",
    "salary"=>93000],
    
   
    
    
];

echo '<table>

<tr>
<th> Employer Id</th>
<th>Salesman Name</th>
<th>Job Name</th>
<th>Salary</th>
</tr>



';



foreach($emp as list("id"=>$id ,"name"=>$name,"job"=>$job,"salary"=>$Salary))
echo "<tr>

<td>$id</td> 

<td>$name</td>

<td>$job</td>

<td>$Salary </td>



</tr>";

echo '</table>'



?>



</body>
</html>