<?php

// 引入autoload.php文件，用于自动加载vendor中的库
require './vendor/autoload.php';

use Starshipguoying\Logguoying\Log;

Log::info_static('guo');
Log::error_static('ying');

hello_startship();