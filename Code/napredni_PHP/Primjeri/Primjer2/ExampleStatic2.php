<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class A { // Base Class
    protected static $name = 'ClassA';
    public static function getSelfName() {
        return self::$name;
    }
    public static function getStaticName() {
        return static::$name;
    }
}

class B extends A {
    protected static $name = 'ClassB';
}

echo B::getSelfName(); // ClassA
echo B::getStaticName(); // ClassB