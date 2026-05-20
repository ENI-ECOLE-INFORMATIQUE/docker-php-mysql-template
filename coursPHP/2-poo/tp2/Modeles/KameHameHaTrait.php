<?php
declare(strict_types=1);

require_once 'Personnage.php';

trait KameHameHaTrait {
    private float $puissance;
    private float $dernierLance = 0;

    public function lancerKameHameHa(Personnage $cible) : void {
        if(microtime(true) - $this->dernierLance < 0.001) {
            $this->dernierLance = microtime(true);
            throw new Exception($this . ' ne peut lancer un KaméHaméHa car il en a lancé une trop récemment', 1);
        }
        $puissance = $this->puissance * min(100, 1000 * (microtime(true) -$this->dernierLance)-1) / 100;
        $this->dernierLance = microtime(true);
        echo $this . ' lance un KaméHaméHa d\'une puissance de ' . $puissance . ' vers '. $cible. '<br>';
        $cible->blessure($puissance);
    }
}