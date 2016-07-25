<?php

namespace Cve\Naming\Converter;

use Cve\Naming\Validator\ValidatorInterface;

/**
 * Class UnderscoreToCamelCase
 * @package Cve\Naming\Converter
 */
class UnderscoreToCamelCase implements ConverterInterface
{
    /**
     * @var ValidatorInterface
     */
    private $validator;

    /**
     * UnderscoreToCamelCase constructor.
     * @param ValidatorInterface $validator
     */
    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    /**
     * It converts one naming convention to another
     *
     * @param string $string
     * @return string
     */
    public function convert($string)
    {
        $this->validator->validate($string);

        // for example
        $string = str_replace('_', ' ', $string);
        // For Example
        $string = ucwords($string);
        // ForExample
        $string = str_replace(' ', '', $string);

        return $string;
    }
}
