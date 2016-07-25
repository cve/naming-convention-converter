<?php

namespace Cve\Naming\Validator;

/**
 * Interface ValidatorInterface
 * @package Cve\Naming\Validator
 */
interface ValidatorInterface
{
    /**
     * @param string $string
     */
    public function validate($string);
}
