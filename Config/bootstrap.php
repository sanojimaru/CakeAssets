<?php
// Load CoffeeScript compiler
define('CAKE_ASSETS_PLUGIN_ROOT', APP.'Plugin'.DS.'CakeAssets'.DS);
require CAKE_ASSETS_PLUGIN_ROOT.'Vendor'.DS.'coffeescript-php'.DS.'src'.DS.'CoffeeScript'.DS.'Init.php';
CoffeeScript\Init::load();

// Load SCSS compiler
require CAKE_ASSETS_PLUGIN_ROOT.'Vendor'.DS.'scssphp'.DS.'scss.inc.php';

