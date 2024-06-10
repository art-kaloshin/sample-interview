<?php

interface WeatherInterface
{
    public function setRain(bool $enabled): self;

    public function isRainyDay();

    public function setSun($enabled);

    public function isSunnyDay();

    private function getCloudAmount(): Cloud;
}