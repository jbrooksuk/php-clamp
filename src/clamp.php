<?php

if (! function_exists('clamp')) {
    /**
     * Clamp a given number between two other numbers.
     *
     * @param  float|int $number
     * @param  float|int $min
     * @param  float|int $max
     * @return float|int
     */
    function clamp($number, $min, $max)
    {
        return min(max($number, $min), $max);
    }
}
