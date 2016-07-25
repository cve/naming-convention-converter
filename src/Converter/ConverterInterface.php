<?php

namespace Cve\Naming\Converter;

/**
 * Interface ConverterInterface
 * @package Cve\Naming\Converter
 */
interface ConverterInterface
{
    /**
     * It converts one naming convention to another
     *
     * @param string $string
     * @return string
     */
    public function convert($string);
}
