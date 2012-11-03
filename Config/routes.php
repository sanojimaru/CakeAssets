<?php
Router::connect('/assets/js/*', array('plugin' => 'cake_assets', 'controller' => 'coffee_script', 'action' => 'convert'));
Router::connect('/assets/css/*', array('plugin' => 'cake_assets', 'controller' => 'scss', 'action' => 'convert'));
