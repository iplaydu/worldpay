<?php
// Require autoload
require __DIR__.'/vendor/autoload.php';

// Create new Worldpay object
$wp = new Worldpay\Worldpay;

// Set the environment
$wp->setConfig(array('env' => 'development'));
