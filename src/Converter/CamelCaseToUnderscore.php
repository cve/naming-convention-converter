<?php

namespace Cve\Naming\Converter;

use Cve\Naming\Validator\ValidatorInterface;

/**
 * Class CamelCaseToUnderscore
 * @package Cve\Naming\Converter
 */
class CamelCaseToUnderscore implements ConverterInterface
{
    /**
     * @var ValidatorInterface
     */
    private $validator;

    /**
     * CamelCaseToUnderscore constructor.
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

        // 1. CamelCase
        // 2. Camel Case
        // 3. camel case
        // 4. camel_case
        $arr = preg_split('/(?=[A-Z])/', $string);
        array_shift($arr);
        $string = join('_', $arr);
        $string = strtolower($string);

        return $string;
    }
}
