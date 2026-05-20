<?php
declare(strict_types=1);

class ClasseAvecCallback {

    private string $att1;
    private int $att2;
    private string $att;

    function __construct() {
        $this->att1 = 'a';
        $this->att2 = mt_rand(1, 24);
        $this->att = "construction";
    }

    function __sleep() : array {
        $this->att2 += 5;
        $this->att2 *= 25;
        return array('att1', 'att2');
    }

    function __wakeup() : void {
        $this->att = "delinéarisation";
        $this->att2 /= 25;
        $this->att2 -= 5;
    }
}

$instance2 = new ClasseAvecCallback();
var_dump($instance2);
$serial = serialize($instance2);
var_dump($serial);
var_dump(unserialize($serial));
