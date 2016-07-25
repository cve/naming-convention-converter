<?php

namespace spec\Cve\Naming\Validator;

use Cve\Naming\Validator\Argument;
use Cve\Naming\Validator\ValidatorInterface;
use PhpSpec\ObjectBehavior;

class ArgumentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Argument::class);
    }

    function it_implements_validator_interface()
    {
        $this->shouldImplement(ValidatorInterface::class);
    }

    function it_throws_invalid_argument_exception_if_null_was_provided()
    {
        $this->shouldThrow(\InvalidArgumentException::class)->during('validate', [null]);
    }
}
