<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
         echo 'ddd';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function facade(){

        echo phpinfo();
    }
}
