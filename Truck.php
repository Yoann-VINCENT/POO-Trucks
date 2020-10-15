<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var int
     */
    private $loadCapacity;

    /**
     * @var int
     */
    private $load = 0;


    public function __construct(string $color, int $nbSeats, string $energy, string $loadCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->loadCapacity = $loadCapacity;
    }

    public function isFull(): string
    {
        if ($this->load == $this->loadCapacity) {
            return "full";
        } else if ($this->load < $this->loadCapacity) {
            return "in filling";
        } else {
            return "NOOOOO ! You stupid #!?!!@# ! you've overload the Truck ! You will pay for the damages !!";
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
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

    public function getLoadCapacity(): int
    {
        return $this->loadCapacity;
    }

    public function setLoadCapacity(int $loadCapacity): void
    {
        $this->loadCapacity = $loadCapacity;
    }

    public function getload(): int
    {
        return $this->load;
    }

    public function setload(int $load): void
    {
        $this->load = $load;
    }
}