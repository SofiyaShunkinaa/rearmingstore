<?php
// Version
define('VERSION', '3.2.0.0');

// Configuration
if (is_file('config.php')) {
    require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
    header('Location: install/index.php');
    exit;
}

// Custom Seo URLs 
require_once('seo-urls.php');

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');
