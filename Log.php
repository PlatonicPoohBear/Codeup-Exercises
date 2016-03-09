<?php 

class Log
{
    public $filename;
    
    public function logMessage($logLevel, $message)
	{
	    date_default_timezone_set('America/Chicago');

	    $log_entry = date('y-m-d h:i:s') . "[{$logLevel}]" . $message . PHP_EOL;

	    $this->filename = "Log/log-" . date('y-m-d') . ".log";
	    $handle = fopen($this->filename, 'a');

	    fwrite($handle, $log_entry);

	    fclose($handle);
	}
    
    public function log_error() 
    {
		$this->logMessage("ERROR", "This is an error message.");	
	}	
    
    public function log_info()
    {
		$this->logMessage("INFO", "This is an info message.");
	}
    
}

 ?>