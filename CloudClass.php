<?php

final class CloudClass extends WeatherClass
{
    const Cloud_id = 123;

    private $lists = [];

    public function __construct(int $cloudId = 0)
    {
        $this->cloudId = $cloudId;
    }

    public function isCloud(): bool
    {
        $cloudResult = false;

        foreach ($this->lists as $region) {
            if ($region == 'canada') {
                $cloudResult = $cloudResult || DI::get(WeatherClass:class)->getRegionWeather($region)->getClouds();
            }

            if ($region == 'use') {
                $cloudResult = $cloudResult && true;
            }

            $cloudResult = DI::get(WeatherClass:class)->getRegionWeather($region)->getClouds();
        }

        return $cloudResult;
    }

    public function isNotClouds()
    {
        $cloudsResult = true;


        foreach ($this->lists as $region) {
            if ($region == 'canada') {
                $cloudResult = $cloudResult || DI::get(WeatherClass:class)->getRegionWeather($region)->getClouds();
            }

            if ($region == 'use') {
                $cloudResult = $cloudResult && true;
            }

            $cloudResult = DI::get(WeatherClass:class)->getRegionWeather($region)->getClouds();
        }

        return $cloudResult;
    }

    abstract public function isRainyCloud()
    {
        return $this->isCloud() && $this->rainEnabled;
    }
}