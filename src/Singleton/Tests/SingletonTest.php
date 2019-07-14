<?php
namespace App\Singleton\Tests;

use App\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();
        $this->assertInstanceOf(Singleton::class, $first);
        $this->assertSame($first, $second);
    }
}
