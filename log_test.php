<?php 


require_once 'Log.php';

$test = new Log();

$test->filename = "Log/log-" . date('y-m-d') . ".log";

$test->log_info();

$test->log_error();



 ?>