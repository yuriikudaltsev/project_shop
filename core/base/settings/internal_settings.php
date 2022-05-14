<?php

  defined('VG_ACCESS') or die('Access denied');

  const TEMPLATE = 'templates/default/';
  const ADMIN_TEMPLATE = 'core/admin/views/';

  const COOKIE_VERSION = '1.0.0';
  const CRYPT_KEY = '';
  const COOKIE_TIME = 60;
  const BLOCK_TIME = 3;

  const QTY = 8;
  const QTY_LINKS = 1;

  const ADMIN_CSS_JS = [
          'styles' => [],
          'scripts' => []
  ];

  const USER_CSS_JS = [
          'styles' => [],
          'scripts' => []
  ];

  function avtoloadMainClasses($class_name) {
    $class_name = str_replace('\\', '/', '$class_name');

    if(!@include_once $class_name . '.php') {
      throw new RouteExeption('Не вірне імя файлу - ' . $class_name);
    }
  }

  spl_autoload_register('avtoloadMainClasses');

 ?>
