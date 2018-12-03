<?php
namespace Oliver\Weather;

/**
 *
 */
interface WeatherServiceInterface
{
    public function configure(array $config);
    public function forecast(array $coordinates) : array;
    public function history(array $coordinates, int $daysBack) : array;
}
