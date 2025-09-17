<?php

class Lasagna
{
    private const int COOK_TIME = 40;
    private const int LAYER_TIME = 2;
    
    public function expectedCookTime()
    {
        return self::COOK_TIME;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        return self::COOK_TIME - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        return $layers_to_prep * self::LAYER_TIME;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    public function alarm()
    {
        return "Ding!";
    }
}
