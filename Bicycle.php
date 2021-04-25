<?php

require_once 'LightableInterface.php';
require_once 'Vehicle.php';


class Bicycle extends Vehicle implements LightableInterface

{
    public function switchOn(): bool
    {
        $result = false;
        if($this->getCurrentSpeed()>=10) {
            $result = true;
        }
        return $result;
    }
    
    public function switchOff(): bool
    {
        return false;
    }
}