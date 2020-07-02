<?php

namespace Tests\Unit;

use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $data = 'Je suis petit';
        $this->assertTrue(Str::startsWith($data, 'Je'));
        $this->assertFalse(Str::startsWith($data, 'Tu'));
        $this->assertSame(Str::startsWith($data, 'Tu'), false);
        $this->assertStringStartsWith('Je', $data);
        $this->assertStringEndsWith('petit', $data);
    }
}
