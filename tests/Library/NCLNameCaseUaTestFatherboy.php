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


    public function testFatherMan0()
    {
        $this->object->setFatherName('Олександрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Олександрович,Олександровича,Олександровичу,Олександровича,Олександровичем,Олександровичу,Олександровичу'), $this->object->getFatherNameCase());
    }
    public function testFatherMan1()
    {
        $this->object->setFatherName('Миколайович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Миколайович,Миколайовича,Миколайовичу,Миколайовича,Миколайовичем,Миколайовичу,Миколайовичу'), $this->object->getFatherNameCase());
    }
    public function testFatherMan2()
    {
        $this->object->setFatherName('Кузьмич');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Кузьмич,Кузьмича,Кузьмичу,Кузьмича,Кузьмичем,Кузьмичу,Кузьмичу'), $this->object->getFatherNameCase());
    }
    public function testFatherMan3()
    {
        $this->object->setFatherName('Петрович');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Петрович,Петровича,Петровичу,Петровича,Петровичем,Петровичу,Петровичу'), $this->object->getFatherNameCase());
    }
    public function testFatherMan4()
    {
        $this->object->setFatherName('Ілліч');
        $this->object->setGender(1);
        
        $this->assertEquals(explode(',','Ілліч,Ілліча,Іллічу,Ілліча,Іллічем,Іллічу,Іллічу'), $this->object->getFatherNameCase());
    }

}