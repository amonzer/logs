<?php

namespace amonzer\logs;

class index
{

    public static function greet($greet = "Hello World")
    {
        return $greet;
    }

//    public function __construct()
//    {
//        require __DIR__ . '/vendor/autoload.php';
//    }

//    public static function info($logs){
//        $log = new Monolog\Logger('name');
//        $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
//        $log->addInfo($logs);
//    }
//
//    public static function alert($logs){
//        $log = new Monolog\Logger('name');
//        $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
//        $log->addAlert($logs);
//    }

}

