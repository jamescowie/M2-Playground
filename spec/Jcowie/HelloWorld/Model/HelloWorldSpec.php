<?php

namespace spec\Jcowie\HelloWorld\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HelloWorldSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Jcowie\HelloWorld\Model\HelloWorld');
    }
    
    /**
     * should return hello world
     */
    function it_should_return_hello_world()
    {
        $this->sayHello()->shouldReturn('Hello World');
    }
}
