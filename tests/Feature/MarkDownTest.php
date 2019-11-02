<?php

namespace techroute\laravelpackagedev\Tests;
use Orchestra\Testbench\TestCase;
use techroute\laravelpackagedev\MarkDownParser;

class MarkDownTest extends TestCase
{

    public function testFirst()
    {
        $this->assertEquals("<h1>Khayrul Hasan</h1>", MarkDownParser::parse('# Khayrul Hasan'));
    }
}