<?php

class Slime {
    public static $type = 'スライム';
    public $suffix = '';
    
    public $hp = 10;
    public $power = 3;
    
    function __construct($suffix) {
        $this->suffix = $suffix;
    }
    
    function name() {
        return self::$type . $this->suffix;
    }
    
    function attack($character_name) {
        print $this->name() . 'が' . $character_name . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
    }
    
    // クラスメソッド
    static function description() {
        print self::$type . 'は、最強のモンスターだ！' . PHP_EOL;
    }
    
    function get_test() {
    $test = 'これはテストです';
    return $test;
    }
}

Slime::description();

$slime_A = new slime('A');

$slime_A->attack('主人公');


