<?php

namespace Foo;

use PHPUnit\Framework\TestCase;
use Foo\Bar;

class BarTest extends TestCase
{

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Bar(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getNumber());
    }

    public function testFalse()
    {
        $this->assertEquals(1, 1);
    }

    public function testBarIsJustACookedFish()
    {
      $number = 1800;
      $time = 1800;
      $bar = new Bar($number);
      $this->assertTrue($bar->isCooked($time)); 
    }

    public function testBarIsAWellCookedFish()
    {
      $number = 1800;
      $time = 2450;
      $bar = new Bar($number);
      $this->assertTrue($bar->isCooked($time)); 
    }
    
    public function testBarIsNotACookedFish()
    {
      $number = 1800;
      $time = 100;
      $bar = new Bar($number);
      $this->assertFalse($bar->isCooked($time)); 
    }

}
