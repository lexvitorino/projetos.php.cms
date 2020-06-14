<?php

require 'environment.php';

define('BASE', 'http://www.cms.pc/'); 

global $config;

if (ENVIRONMENT == 'development') {
    $config['dbname'] = 'cms';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    $config['host'] = 'localhost';
    $config['dbname'] = 'sysol874_loja';
    $config['dbuser'] = 'sysol874_root';
    $config['dbpass'] = 'miguel032014';
}