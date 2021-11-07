<?php

namespace amonzer\logs;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class log{

    public static function info($logs){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
        $log->addInfo($logs);
    }

    public static function alert($logs){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
        $log->addAlert($logs);
    }

    public static function critical($logs){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
        $log->addCritical($logs);
    }

    public static function warning($logs){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
        $log->addWarning($logs);
    }

    public static function error($logs){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
        $log->addError($logs);
    }

    public static function debug($logs){
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
        $log->addDebug($logs);
    }

}
