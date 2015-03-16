<?php

/*
 * Plugin Name: Hyyan Login Style
 * Plugin URI: https://github.com/hyyan/login-style/
 * Description: Wordpress plugin to allow themes to add their own login page style
 * Author: Hyyan Abo Fakher
 * Version: 1.0
 * Author URI: https://github.com/hyyan
 * GitHub Plugin URI: hyyan/login-style
 * License: MIT License
 */

if (!defined('ABSPATH'))
    exit('restricted access');

require_once __DIR__ . '/src/Hyyan/LoginStyle/Plugin.php';

/**
 * Bootstrap the plugin
 */
new Hyyan\LoginStyle\Plugin();
