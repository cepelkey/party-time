<?php
require 'vendor/autoload.php';

class App extends \atk4\ui\App {
    function __construct($is_admin = false) {
        parent::__construct('Party App');

        // Depending on the use, select appropriate layout
        if ($is_admin) {
            $this->initLayout('Admin');
        } else {
            $this->initLayout('Centered');
        }
    }
}