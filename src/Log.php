<?php
namespace Starshipguoying\Logguoying;

use Starshipguoying\Logguoying\Drivers\FileLog;

class Log extends FileLog{
	public static function info_static($message){
		$fileLog = new self();
		$fileLog->info($message);
	}
	public static function error_static($message){
		$fileLog = new self();
		$fileLog->error($message);
	}
}