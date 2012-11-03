<?php
class AssetsHelper extends AppHelper {

    public $helpers = array('Html', 'Js');

    public function js($filepath) {
        $tag = null;
        if (preg_match('/\.js$/', $filepath)) {
            $tag = $this->Html->script("/assets/{$filepath}");
        }

        debug($tag);
        return $tag;
    }

}
