<?php
namespace app\index\controller;


class a{
    public function aa(){
        new static();
    }

    public function bb(){
        new self();
    }
}


$f = new a();
echo get_class($f->aa());
echo get_class($f->bb());
class Index
{
    public function index()
    {
         echo 'ddd';
    }

    public function abc(){
        echo "abc";
    }

    public function hello($name = 'ThinkPHP5')
    {

        $objarray = new \ObjArray();

$array = $objarray['array'] = 'aaaaa';
        print_r($objarray);
        return 'hello,' . $name;
    }

    public function facade(){

        echo phpinfo();
    }
}
