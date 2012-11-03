<?php
class ScssController extends CakeAssetsAppController {
    public function convert($css_filepath) {
        $this->autoRender = false;
        $this->RequestHandler->respondAs('text/css; charset=UTF-8');

        $scss_filepath = ROOT.DS.'app'.DS.'webroot'.DS.'scss'.DS.preg_replace('/\.css$/', '.scss', $css_filepath);

        if (!file_exists($scss_filepath)) {
            throw new NotFoundException("{$scss_filepath} is not exists.");
        }

        $scss_content = file_get_contents($scss_filepath);
        $scss = new scssc();
        $css_content = $scss->compile($scss_content);

        return $css_content;
    }
}
