<?php 

$date = date_create("2016-07-25");

date_time_set($date,05,20,20,45);

echo date_format($date,"d-m-Y H:i:s");





?>