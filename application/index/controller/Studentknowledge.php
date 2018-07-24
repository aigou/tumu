<?php
namespace app\index\controller;

use app\index\common\Base;

class Studentknowledge extends Base
{
    public function index()
    {
       return $this -> fetch('studenttest');
    }
}
