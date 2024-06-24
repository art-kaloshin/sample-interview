<?php

final class CloudClass extends WeatherClass
{
    const Cloud_id = 123;

    private $lists = [];

    private $region = 'canada';

    private array $week = [];

    public function __construct(int $cloudId = 0, string $region)
    {
        $this->cloudId = $cloudId;

        $this->region = $region;

        $this->week = array_fill(0, 7, new DayWeather());
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

    public function setWeekDayWeather(int $weekDay, bool $isSunny, bool $isRainy, bool $isSnowy, bool $isWindy, bool $isCloudy)
    {
        $this->week[$weekDay]
            ->setIsSunny($isSunny)
            ->setIsRainy($isRainy)
            ->setIsSnowy($isSnowy)
            ->setIsWindy($isWindy)
            ->setIsCloudy($isCloudy);

        return $this->week;
    }

    public function getWeekDayWeather(int $weekDay)
    {
        return $this->week[$weekDay];
    }
}
