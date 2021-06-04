<?php 
use PHPUnit\Framework\TestCase;

class FalabellaTest extends TestCase{
    private $flb;

    public function setUp():void{
        $this->flb = new Falabella();
    }

    public function testNotAcceptString(){

        $this->expectException(InvalidArgumentException::class);
        $this->flb->searchValue("prueba");

    }

    public function testNotAcceptFloat(){

        $this->expectException(InvalidArgumentException::class);
        $this->flb->searchValue(3.5);

    }

    public function testNotAcceptBoolean(){

        $this->expectException(InvalidArgumentException::class);
        $this->flb->searchValue(true);

    }

}


?>