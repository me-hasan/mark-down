<?php


namespace techroute\laravelpackagedev;


use Illuminate\Support\Facades\File;
use Parsedown;

class FileParser
{
    protected $fileName;
    protected $data;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->spit();
    }

    public function getData()
    {
        return $this->data;
    }

    public function spit()
    {
        preg_match_all('/^\-{3}(.*?)\-{3}(.*)/s',
            File::get($this->fileName),
            $this->data
        );

        dd($this->data);

    }


}