<?php
Router::connect('/assets/*', array('plugin' => 'cake_assets', 'controller' => 'coffee_script', 'action' => 'convert_coffee_to_js', 'ext' => 'js'));
