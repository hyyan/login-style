# [Wordpress Login Style ](https://github.com/hyyan/login-style/)

[![project status](http://stillmaintained.com/hyyan/login-style.png)](http://stillmaintained.com/hyyan/login-style)
[![Latest Stable Version](https://poser.pugx.org/hyyan/login-style/v/stable.svg)](https://packagist.org/packages/hyyan/login-style)
[![Total Downloads](https://poser.pugx.org/hyyan/login-style/downloads.svg)](https://packagist.org/packages/hyyan/login-style)
[![License](https://poser.pugx.org/hyyan/login-style/license.svg)](https://packagist.org/packages/hyyan/login-style)

Wordpress plugin to allow themes to add their own login page style

## Features

* Add your own login style which is fit with your theme
* check the remember me checkbox by default

## Example

The plugin comes with an example to see how the plugin works

To use the example

* Copy ```example/css/login.style``` to ```your/current/theme/css/login.css```
* visit the login page to see the new style

![ScreenShot](https://raw.github.com/hyyan/login-style/master/screenshot-1.png)

## How to install

### Classical way

1. Download the plugin as zip archive and then upload it to your wordpress plugins 
folder and extract it there.
2. Activate the plugin from your admin panel

### Composer way

1. run composer command : ``` composer require hyyan/login-style```

## How to use

Just add your css file to ```your/current/theme/css/login.css``` and the plugin
will handle the rest for you.

### Plugin configutaion

The plugin comes with following configuration as default :

```php
$default = array(

    // path relative to the theme dir
    // (could be a php file which output css markup)
    'path' => '/css/login.css',

    // check the remember me checkbox
    'check_remember_me' => true,
);
```
You can override the default configuration using ```add_filter``` function like
in the following example :

```php
// in the your theme's functions.php file

add_filter('Hyyan\LoginStyle.options', function(array $default) {

    $default['path'] = '/my-login-style.css';

    return $default;
});
```

## Contributing

Everyone is welcome to help contribute and improve this plugin. There are several
ways you can contribute:

* Reporting issues (please read [issue guidelines](https://github.com/necolas/issue-guidelines))
* Suggesting new features
* Writing or refactoring code
* Fixing [issues](https://github.com/hyyan/login-style/issues)
