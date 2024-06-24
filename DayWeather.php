<?php

class DayWeather
{
    private bool $isRainy = false;
    private bool $isSunny = false;
    private bool $isCloudy = false;
    private bool $isWindy = false;
    private bool $isSnowy = false;

    public function isRainy(): bool
    {
        return $this->isRainy;
    }

    public function setIsRainy(bool $isRainy): DayWeather
    {
        $this->isRainy = $isRainy;

        return $this;
    }

    public function isSunny(): bool
    {
        return $this->isSunny;
    }

    public function setIsSunny(bool $isSunny): DayWeather
    {
        $this->isSunny = $isSunny;

        return $this;
    }

    public function isCloudy(): bool
    {
        return $this->isCloudy;
    }

    public function setIsCloudy(bool $isCloudy): DayWeather
    {
        $this->isCloudy = $isCloudy;

        return $this;
    }

    public function isWindy(): bool
    {
        return $this->isWindy;
    }

    public function setIsWindy(bool $isWindy): DayWeather
    {
        $this->isWindy = $isWindy;

        return $this;
    }

    public function isSnowy(): bool
    {
        return $this->isSnowy;
    }

    public function setIsSnowy(bool $isSnowy): DayWeather
    {
        $this->isSnowy = $isSnowy;

        return $this;
    }


}
