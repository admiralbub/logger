<?php
    namespace App\Factory;

    use App\Contracts\LoggerInterface;
    use App\Logger\LoggerSend;
    class LoggerFactory {
        public static function createLogger() : LoggerInterface {
            return new LoggerSend();
        }
    }
?>