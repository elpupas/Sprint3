<?php
Class Tigger{
    private static $instances = []; 
    private static $roarNumber = 0;

    private function __construct() {
        echo "Building character..." . '<br>' . PHP_EOL;
    } 
    protected function __clone(){}
    public function __wakeup(){
     throw new \Exception("Cannot unserialize singleton");
    }
    public static function getInstance(){
        $class = statiic::class;
        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new static();
        }
        return self::$instances[$class];
    }

    public function roar() {
        
        self::$roarNumber++;
        echo "Grrr!" . PHP_EOL;
    }
    public function getCounter() {

        echo 'Tigger has roared '. self::$roarNumber . ' times.'  . PHP_EOL;

    }
}

?>