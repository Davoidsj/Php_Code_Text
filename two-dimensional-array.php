<?php


$x =[
[1,"Kamrul Alam","Database Engineer",45567.89],
[2,"Susmita Sen","Cyber-security Engineer",57839.56],
[3,"Noman Khanna","Web Developer",68399.66],
[4,"Shariar Ahmed","Artificial Intelligence Engineer",97333.96]


];

echo '<table border="1" cellspacing="0" cellpadding = "10" style="text-align:center;">';
echo '<thead style="font-style:italic;font-size:20px;">';
echo '<tr>';

echo '<th>Employee No.</th>';
echo "<th>Employee's Name.</th>";
echo '<th>Job Name</th>';
echo '<th>Salary</th>';
echo '</tr>';

print '</thead>';

echo '<tbody>';


foreach($x as $row){
 echo '<tr>';
foreach($row as $col)
   
echo '<td>'.$col.'</td>';

echo '</tr>';

}




echo '</tbody>';

echo '</table>';






// echo "<pre>";

// print_r($x);

// echo "</pre>";




?>