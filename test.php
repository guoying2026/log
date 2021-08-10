<?php

// 引入autoload.php文件，用于自动加载vendor中的库
require './vendor/autoload.php';

use Starship\Logguoying\Log;

Log::info_static('guo');
Log::error_static('ying');

hello_startship();