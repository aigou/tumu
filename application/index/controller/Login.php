<?php
namespace app\index\controller;

use app\index\common\Base;

class Login extends Base
{
    public function index()
    {
       return $this -> fetch('login');
    }
}
