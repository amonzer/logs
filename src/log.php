<?php

namespace amonzer\logs;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class log{

    public static function alert($logs, $file = 'log'){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler($file, Logger::WARNING));
        $log->addAlert($logs);
    }

    public static function critical($logs, $file = 'log'){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler($file, Logger::WARNING));
        $log->addCritical($logs);
    }

    public static function warning($logs, $file = 'log'){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler($file, Logger::WARNING));
        $log->addWarning($logs);
    }

    public static function error($logs, $file = 'log'){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler($file, Logger::WARNING));
        $log->addError($logs);
    }

}
