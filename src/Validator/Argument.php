<?php

namespace Cve\Naming\Validator;

/**
 * Class Argument
 * @package Cve\Naming\Validator
 */
class Argument implements ValidatorInterface
{
    /**
     * @param string $string
     */
    public function validate($string)
    {
        if (!is_string($string) || $string == '') {
            throw new \InvalidArgumentException('The provided param should be not empty string!');
        }
    }
}
