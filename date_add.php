<?php 



$date = date_create("2021-03-24");

date_modify($date,"-10 days");

echo date_format($date,"d-m-Y");



?>