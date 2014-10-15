<?php

/*
 * Plugin Name: Hyyan Login Style
 * Plugin URI: https://github.com/hyyan/login-style/
 * Description: Wordpress plugin to allow themes to add their own login page style
 * Author: Hyyan Abo Fakher
 * Version: 0.1
 * Author URI: https://github.com/hyyan
 * GitHub Plugin URI: hyyan/login-style
 * License: MIT License
 */

require_once __DIR__ . '/src/HyyanLoginStyle.php';

/**
 * Bootstrap the plugin
 */
new HyyanLoginStyle();
