<?php

class Car 
{
    private bool $hasParkBrake = true;
    private int $currentSpeed = 0;

    public function start(): string
    {
        if($this->hasParkBrake === true) {
            throw new Exception("Baisse ton frein à main Homer!!!");
        }
        return "Go!";
    }

        /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     */ 
    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * Set the value of currentSpeed
     */ 
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }
}