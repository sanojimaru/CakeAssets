<?php
class CoffeeScriptController extends CakeAssetsAppController {
    public function convert_coffee_to_js($js_filepath) {
        $this->autoRender = false;
        $this->RequestHandler->respondAs('text/javascript; charset=UTF-8');

        $coffee_filepath = ROOT.DS.'app'.DS.'webroot'.DS.'coffee'.DS.preg_replace('/\.js$/', '.coffee', $js_filepath);

        if (!file_exists($coffee_filepath)) {
            throw new NotFoundException("{$coffee_filepath} is not exists.");
        }

        $coffee_content = file_get_contents($coffee_filepath);
        $js_content = CoffeeScript\Compiler::compile($coffee_content);

        return $js_content;
    }
}
