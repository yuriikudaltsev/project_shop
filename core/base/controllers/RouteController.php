<?php

namespace core\base\controllers;

class RouteController
{
    static private $_instance;
    public $hair = 'Русі';

    private function __construct () {

    }

    private function __clone () {

    }

    static public function getInstance() {
        if(self::$_instance instanceof self) {
            return self::$_instance;
        }

        return self::$_instance = new self;
    }
}