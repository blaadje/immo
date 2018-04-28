<?php

    require_once __DIR__ . '/../vendor/autoload.php';

    ActiveRecord\Config::initialize(function($config){

        $config->set_connections([
            'development' => 'mysql://root:password@immoDb/immo'
        ]);
    });
 ?>
