<?php


require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface

{
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake;


    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function __construct(string $color, int $nbSeats, string $energy)

    {

        parent::__construct($color, $nbSeats);

        $this->setEnergy($energy);
    }


    public function setParkBrake()
    {
        $sentence = "";

        if ($this->hasParkBrake = true) {

            $sentence .= " Park brake as on";
        } else {
            $sentence .= " Park brake as off";
        }
    }

    public function start()
    {
        if ($this->getCurrentSpeed()<= 1) {
            throw new Exception('the car is stop');
        }
    }

    public function getEnergy(): string

    {

        return $this->energy;
    }


    public function setEnergy(string $energy): Car

    {

        if (in_array($energy, self::ALLOWED_ENERGIES)) {

            $this->energy = $energy;
        }

        return $this;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }


    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }


    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}
