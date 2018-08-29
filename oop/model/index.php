<?php
class c1 {
    public static $v = 10;

    public static function  f1()
    {
        echo self::$v;
    }

}

class c2 extends  c1{
    public static  $v = 20;

    public  static  function f2(){
        echo static::$v;
    }
}

 c2::f1();