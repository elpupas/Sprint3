<?php
include("Tigger.php");
$tigger = Tigger::getInstance();

$tigger->roar();
$tigger->roar();
$tigger->roar();

$tigger->getCounter();

 function testClassTigger(){
$s1 = Tigger::getInstance();
$s2 = Tigger::getInstance();
if($s1 === $s2){
    echo "El patron Singleton esta funcionando correctamente";
}else{
    echo "El patron singleton ha fallado";
}
}
testClassTigger();
?>