<?php
class AssetsHelper extends AppHelper {

    public $helpers = array('Html', 'Js');

    public function js($filepath) {
        if (preg_match('/\.js$/', $filepath)) {
            return $this->Html->script("/assets/js/{$filepath}");
        }

        return $this->Html->script($filepath);
    }

    public function css($filepath) {
        if (preg_match('/\.css$/', $filepath)) {
            return $this->Html->css("/assets/css/{$filepath}");
        }

        return $this->Html->css($filepath);
    }

}
