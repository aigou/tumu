<?php
namespace app\index\controller;

use app\index\common\Base;

class Index extends Base
{
    public function index()
    {
        return $this -> fetch('index');
    }
    public function info()
    {
        return $this -> fetch('info');
    }
    public function more_info()
    {
        return $this -> fetch('more_info');
    }
}
