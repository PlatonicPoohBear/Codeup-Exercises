<?php

function logMessage($logLevel, $message)
{
    date_default_timezone_set('America/Chicago');

    $log_entry = date('y-m-d h:i:s') . "[{$logLevel}]" . $message . PHP_EOL;

    $filename = "Log/log-" . date('y-m-d') . ".log";
    $handle = fopen($filename, 'a');

    fwrite($handle, $log_entry);

    fclose($handle);
}

function log_info() {
	logMessage("INFO", "This is an info message.");
}

function log_error() {
	logMessage("ERROR", "This is an error message.");	
}


log_info();
log_error();

echo "Done" . PHP_EOL;