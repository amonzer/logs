<?php

namespace amonzer\logs;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class log{

    public static function alert($text, $fileName = 'log'){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler($fileName.'.log', Logger::WARNING));
        $log->addAlert($text);
    }

    public static function critical($text, $fileName = 'log'){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler($fileName.'.log', Logger::WARNING));
        $log->addCritical($text);
    }

    public static function warning($text, $fileName = 'log'){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler($fileName.'.log', Logger::WARNING));
        $log->addWarning($text);
    }

    public static function error($text, $fileName = 'log'){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler($fileName.'.log', Logger::WARNING));
        $log->addError($text);
    }

}
