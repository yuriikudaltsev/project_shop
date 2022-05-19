<?php

namespace core\base\settings;

use core\base\settings\Settings;

class ShopSettings{

    static private $_instance;
    private $baseSettings;

    private $templateArr = [
        'text' => ['name', 'phone', 'adress', 'price', 'short'],
        'textarea' => ['content', 'keywords', 'goods-content']
    ];

    static public function get($property) {
        return self::instance()->$property;
    }

    public static function instance() {
        if(self::$_instance instanceof self) {
            return self::$_instance;
        }

        self::$_instance = new self;
        self::$_instance->$baseSettings = Settings::instance();
        $baseProperties = self::$_instance->$baseSettings->clueProperties(get_class());
        return self::$_instance;
    }

    private function __construct() {

    }

    private function __clone() {

    }

}