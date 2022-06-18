<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\DemoController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testCalcul(){
        $result = DemoController::calcul(2,4);
        $this->assertEquals($result, 6);
        $this->assertNotEquals($result, 12);
    }
}
