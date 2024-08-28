<?php

//Write a class called 'Logger' with a static property called 'logCount' that keeps track of the number of log messages. Implement a static method to log a message.

class Logger {
    private $name;
    private static int $logCount = 0;

    public function log($message) {
        self::$logCount++;
        echo "<br>Name: $this->name, Log message no.". self::$logCount. " : $message <br>";
    }
    public function getLogCount ()
    {
        if (self::$logCount == 1)
            echo "<br>No. of messages logged is only ". self::$logCount ." message <br>";
        elseif (self::$logCount > 1) {
            echo "<br>No. of messages logged are ". self::$logCount ." messages <br>";
        }
        else
        {
            echo "<br>No messages has entered to be logged <br>";
        }
    }
    public function __construct($name){
        $this->name = $name;
    }
}
$Ahmed = new Logger('Ahmed');
$Ahmed->getLogCount();
$Ahmed->log('Hello, Saleh!');
$Ahmed->getLogCount();
$Saleh = new Logger('Saleh');
$Saleh->log('Hello, Ahmed!');
$Saleh->getLogCount();
$Esmail = new Logger('Esmail');
$Esmail->log('Hello, both of you!');
$Esmail->getLogCount();
