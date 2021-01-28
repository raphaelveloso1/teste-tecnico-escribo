<?php
class testeTecnico1Test extends PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass() : void
    {
        require_once 'testeTecnico1.php';
    }

    public function testTheSumOf10DivisibleBy3and5() : void
    {
        $this->assertEquals(23, sumMultiplesOf3and5(10));
    }

    public function testTheSumOf11DivisibleBy3and5() : void
    {
        $this->assertEquals(33, sumMultiplesOf3and5(11));
    }

    public function testValuesLessThanDivisors() : void
    {
        $this->assertEquals(0, sumMultiplesOf3and5(1));
    }

    public function testeWhenValueIsZero() : void
    {
        $this->assertEquals(0, sumMultiplesOf3and5(0));
    }
}
