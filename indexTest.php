<?php
use PHPUnit\Framework\TestCase;
require_once "./index.php";

class indexTest extends TestCase{
    public function testCekUmur()
    {
        $this->assertEquals(22, MyClass::cek_umur(07,12,1998));
    }
    public function testCekOperandT()
    {
        $this->assertEquals(3, MyClass::operasi_aritmatika(1,2,'+'));
    }
    public function testCekOperandK()
    {
        $this->assertEquals(1, MyClass::operasi_aritmatika(1,2,'-'));
    }
    public function testCekOperanKL()
    {
        $this->assertEquals(2, MyClass::operasi_aritmatika(1,2,'x'));
    }
    public function testCekOperanB()
    {
        $this->assertEquals(1, MyClass::operasi_aritmatika(1,1,'/'));
    }
}
