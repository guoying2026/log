<?php
namespace Starshipguoying\Logguoying\Drivers;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

class FileLog extends AbstractLogger implements LoggerInterface{

	public function info($message, array $context = array()){
		echo $message;
	}
	public function error($message, array $context = array()){
		echo $message;
	} 
	public function log($level, $message, array $context = array())
    {
        echo 'FileLog';
    }
}