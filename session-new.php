<?php 




session_start();

print_r($_SESSION);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible"
content="IE=edge chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Session</title>
    
</head>
<body>

<?php 

if(isset($_SESSION["favColor"]))

echo $_SESSION["favColor"];

else
echo "Session variable is not set.";

?>
    
</body>
</html>