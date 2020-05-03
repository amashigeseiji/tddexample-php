<?php
namespace TDDExample;

use PHPUnit\Framework\TestCase;
use stdClass;

class Test1Test extends TestCase
{
    /**
     * @test
     */
    public function test1() : void
    {
        $pc = new Product();
        $electronic = new stdClass();
        $pc->setCategory($electronic);
        $this->assertEquals($electronic, $pc->getCategory());
    }
}
