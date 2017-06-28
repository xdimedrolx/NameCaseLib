<?php

namespace NCLTest;

use NCL\NameCaseUa;
use PHPUnit\Framework\TestCase;

class NameCaseUaTest extends TestCase
{

    /**
     * @var NameCaseRu
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new NameCaseUa;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }


    public function testCrazy0()
    { 
        $this->assertEquals(explode(',','Василівна,Василівни,Василівні,Василівну,Василівною,Василівні,Василівно'), $this->object->q('Василівна'));
    }
    public function testCrazy1()
    { 
        $this->assertEquals(explode(',','Антонівна,Антонівни,Антонівні,Антонівну,Антонівною,Антонівні,Антонівно'), $this->object->q('Антонівна'));
    }
    public function testCrazy2()
    { 
        $this->assertEquals(explode(',','Яківна,Яківни,Яківні,Яківну,Яківною,Яківні,Яківно'), $this->object->q('Яківна'));
    }

}