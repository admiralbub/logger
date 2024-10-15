<?php 
namespace App\Logger;
use App\Contracts\LoggerInterface;
use App\Models\Logger;
use App\Mail\LoggerEmail;
use Illuminate\Support\Facades\Mail;
class LoggerSend implements LoggerInterface {

    private $type;

    public function send(string $message): void {
        switch($this->getType()) {
            case 'file':
                file_put_contents(storage_path('log.log'), $message . PHP_EOL, FILE_APPEND);
                $mess = "Was send logger in file";
                break;
            case 'db':
                $logger = new Logger();
                $logger->message = $message;
                $logger->save();
                $mess = "Was send logger in databases";
                break;

            case 'email':
                $email = config('logger.email_to');
                Mail::to($email)->send(new LoggerEmail([
                    'logger' => $message,
                ]));
                $mess =  "Was send logger in email";
                break;
            default:
                throw new \InvalidArgumentException('Unknown logger type :(');
        }
        echo "<strong style='font-size:21px'>".$mess."</strong><br>";
        
    }
    public function sendByLogger(string $message, string $loggerType): void {
        
        $this->setType($loggerType);
        $this->send($message);
    }
    public function getType(): string {
        return  $this->type;
    }
    public function setType(string $type): void {
        $this->type = $type;
    }
}

?>