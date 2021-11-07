<?php

namespace amonzer\logs;

class log{

    public function __construct()
    {
        require __DIR__ . '/vendor/autoload.php';
    }

    public static function info($logs){
        $log = new Monolog\Logger('name');
        $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
        $log->addInfo($logs);
    }

    public static function alert($logs){
        $log = new Monolog\Logger('name');
        $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
        $log->addAlert($logs);
    }

    public static function critical($logs){
        $log = new Monolog\Logger('name');
        $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
        $log->addCritical($logs);
    }

    public static function warning($logs){
        $log = new Monolog\Logger('name');
        $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
        $log->addWarning($logs);
    }

    public static function error($logs){
        $log = new Monolog\Logger('name');
        $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
        $log->addError($logs);
    }

    public static function debug($logs){
        $log = new Monolog\Logger('name');
        $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
        $log->addDebug($logs);
    }

}
