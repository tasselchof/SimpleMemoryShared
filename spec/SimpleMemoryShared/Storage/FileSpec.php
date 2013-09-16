<?php

namespace spec\SimpleMemoryShared\Storage;

use PhpSpec\ObjectBehavior;

class FileSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(array('dir' => __DIR__ . '/../../../tests/tmp'));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('SimpleMemoryShared\Storage\File');
    }

    function it_sets_value()
    {
        $this->write('cutom-key', 'value')->willReturn(true);
    }
    
    function it_gets_value()
    {
        $this->read('cutom-key')->willReturn(true);
    }
}
