<?php

namespace techroute\laravelpackagedev\Tests;
use Orchestra\Testbench\TestCase;
use techroute\laravelpackagedev\FileParser;
use techroute\laravelpackagedev\MarkDownParser;

class FileParserTest extends TestCase
{

    public function the_head_and_body_get_spit()
    {
          $fileParser = (new FileParser(__DIR__.'/../blog/File1.md'));

          $data = $fileParser->getData();

          $this->assertContains('title: My title', $data[1]);
          $this->assertContains('description: Description Here', $data[1]);
          $this->assertContains('Blog Post Body Here', $data[2]);
    }
}