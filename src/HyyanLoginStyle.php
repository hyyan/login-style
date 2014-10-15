<?php

/*
 * This file is part of the hyyan/login-style package.
 * (c) Hyyan Abo Fakher <tiribthea4hyyan@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * HyyanLoginStyle
 *
 * @author Hyyan
 */
class HyyanLoginStyle {

    /**
     * Constrcut the plugin
     */
    public function __construct() {
        add_action('login_head', array($this, 'addLoginStyle'));
        add_filter('login_footer', array($this, 'checkRememberMe'));
    }

    /**
     * Check the remember my checkbox if option is enabled
     */
    function checkRememberMe() {
        $options = $this->getOptions();
        if (true == $options['check_remember_me']) {
            print("<script>document.getElementById('rememberme').checked = true;</script>");
        }
    }

    /**
     * Add the login style file
     */
    public function addLoginStyle() {
        $options = $this->getOptions();
        if (!$options['path'])
            return false;

        ob_start();
        if (!file_exists($file = get_template_directory() . $options['path'])) {
            printf('Login Style "%s" does not exists', $file);
            return false;
        }
        
        include ($file);
        printf('<style type="text/css">%s</style>', ob_get_clean());
    }

    /**
     * Get options
     * 
     * @return array
     */
    public function getOptions() {
        $default = array(
            // path relative to the theme dir
            'path' => '/css/login.css',
            // check the remember me checkbox
            'check_remember_me' => true,
        );
        return apply_filters('Hyyan\LoginStyle.options', $default);
    }

}
