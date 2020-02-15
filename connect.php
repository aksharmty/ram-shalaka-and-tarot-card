<?php
$connection = mysqli_connect('fdb12.runhosting.com', '1716009_123', 'hgRTR#@9213816442');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, '1716009_123');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}