<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factory\LoggerFactory;

class MainController extends Controller
{

      
    public function log() {
        $type = config('logger.type');

        $message = "This message is sent to all loggers";
        $loggerFile = LoggerFactory::createLogger();
        $loggerFile->sendByLogger($message,$type);
    }

   
    public function logTo(string $type) {
        $message = "This message is sent to all loggers";
        $loggerFile = LoggerFactory::createLogger();
        $loggerFile->sendByLogger($message,$type);
    }

    public function logToAll() {
        $message = "This message is sent to all loggers";
        $loggers = ['email', 'file', 'db'];

        foreach ($loggers as $type) {
            $loggerFile = LoggerFactory::createLogger();
            $loggerFile->sendByLogger($message,$type);
        }

    }   
}
