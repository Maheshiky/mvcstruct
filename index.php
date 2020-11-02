<?php

require 'config/paths.php';
require 'config/database.php';

spl_autoload_register( function($class) {
    if (is_file(LIBS.$class.'.php')) {
        require LIBS.$class.'.php';
    }
});

$app = new Boostrap();

?>
