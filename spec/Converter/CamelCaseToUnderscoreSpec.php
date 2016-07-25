<?php

namespace spec\Cve\Naming\Converter;

use Cve\Naming\Converter\CamelCaseToUnderscore;
use Cve\Naming\Converter\ConverterInterface;
use Cve\Naming\Validator\ValidatorInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CamelCaseToUnderscoreSpec extends ObjectBehavior
{
    function let(ValidatorInterface $validator)
    {
        $this->beConstructedWith($validator);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(CamelCaseToUnderscore::class);
    }

    function it_implements_converter_interface()
    {
        $this->shouldImplement(ConverterInterface::class);
    }

    function it_should_convert_camel_case_string_to_underscore_version(ValidatorInterface $validator)
    {
        $validator->validate(Argument::any())->shouldBeCalled();

        $this->convert('CamelCaseToUnderscore')->shouldReturn('camel_case_to_underscore');
    }
}
