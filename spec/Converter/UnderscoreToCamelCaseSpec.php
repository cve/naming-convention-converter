<?php

namespace spec\Cve\Naming\Converter;

use Cve\Naming\Converter\ConverterInterface;
use Cve\Naming\Converter\UnderscoreToCamelCase;
use Cve\Naming\Validator\ValidatorInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UnderscoreToCamelCaseSpec extends ObjectBehavior
{
    function let(ValidatorInterface $validator)
    {
        $this->beConstructedWith($validator);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(UnderscoreToCamelCase::class);
    }

    function it_implements_converter_interface()
    {
        $this->shouldImplement(ConverterInterface::class);
    }

    function it_converts_underscored_convention_to_camel_cased(ValidatorInterface $validator)
    {
        $validator->validate(Argument::any())->shouldBeCalled();

        $this->convert('some_of_the_underscore')->shouldReturn('SomeOfTheUnderscore');
    }
}
