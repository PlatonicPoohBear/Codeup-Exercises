<?php 

class Log
{
    public $filename;
    public $handle;
    
    
    public function __construct()
    {
    	$this->filename = "Log/log-" . date('y-m-d') . ".log";

    	$this->handle = fopen($this->filename, 'a');
    }

    public function logMessage($logLevel, $message)
	{
	    date_default_timezone_set('America/Chicago');

	    $log_entry = date('y-m-d h:i:s') . "[{$logLevel}]" . $message . PHP_EOL;

	    fwrite($this->handle, $log_entry);

	}
    
    public function log_error() 
    {
		$this->logMessage("ERROR", "This is an error message.");	
	}	
    
    public function log_info()
    {
		$this->logMessage("INFO", "This is an info message.");
	}

	public function __destruct()
	{
		fclose($this->handle);
	}
    
}

 ?>