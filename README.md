# Assets plugin for CakePHP

This plugin add SCSS and CoffeeScript support for CakePHP2.

# Installation and Usage

Add submodule into APP/Plugin directory

    cd ROOT
    git submodule add git@github.com:sanojimaru/CakeAssets.git app/Plugin/CakeAssets

Load plugin's bootstrap and routing.

    // APP/Config/bootstrap.php
    CakePlugin::load('CakeAssets', array('bootstrap' => true, 'routes' => true));

Include AssetsHelper into AppController.

    // APP/Controller/AppController
    class AppController extends Controller {
        // Add follow line
        public $helpers = array('CakeAssets.Assets');
    }

Create some CoffeeScript files and SCSS files.

    // Use CoffeeScript
    mkdir APP/webroot/coffee
    echo "alert 'this is a coffee script code.'"  > APP/webroot/coffee/example.coffee

    // Use SCSS
    mkdir APP/webroot/scss
    echo "body {h1 {font: {size: 26px}}}" > APP/webroot/scss/example.scss

Use AssetsHelper in any views.

    // Link to CoffeeScript
    <?php echo $this->Assets->js('example.coffee'); ?>

    // Link to SCSS
    <?php echo $this->Assets->css('example.scss'); ?>

# Feature

- Support precompile all assets.
- Support minify.

# Demo

http://cakedemo.sanojimaru.com/
