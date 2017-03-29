<?php

class Log {

	public $filename;

	public function logMessage($level, $message) {
		$this->filename = 'log-' . date('Y-m-d') . ".log";
		
		$timestamp = date("Y-m-d H:i:s");

		$logEntry = PHP_EOL . "$timestamp - $level - $message";

		$handle = fopen($this->filename, 'a');
		fwrite($handle, $logEntry);
	}

	public function info($message) {
		$this->logMessage("INFO", $message);
	} 

	public function error($message) {
		$this->logMessage("ERROR", $message);
	}
}