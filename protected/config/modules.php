<?php
return array(
    'gii'=>array(
        'class'=>'system.gii.GiiModule',
        'password'=>'1234',
        // If removed, Gii defaults to localhost only. Edit carefully to taste.
        'ipFilters'=>array('127.0.0.1','::1'),
        'generatorPaths' => array(
            'ext.giix-core', // giix generators
        ),
    ),
);
?>