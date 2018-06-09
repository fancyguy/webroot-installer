# A Webroot [Composer](http://getcomposer.org) Library Installer

[![Build Status](https://travis-ci.org/fancyguy/webroot-installer.png?branch=master)](https://travis-ci.org/fancyguy/webroot-installer)

This is for PHP packages that support composer to configure in their `composer.json`.  It will
allow a root package to define a webroot directory and webroot package and magically install it
in the correct location.

## Example `composer.json` File

``` json
{
    "name": "fancyguy/www-fancyguy-com",
    "description": "Package to build www.fancyguy.com",
    "authors": [
        {
            "name": "Steve Buzonas",
            "email": "steve@fancyguy.com"
        }
    ],
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "wordpress/wordpress",
                "type": "webroot",
                "version": "4.5.1",
                "dist": {
                    "type": "zip",
                    "url": "https://wordpress.org/wordpress-4.5.1-no-content.zip"
                },
                "require": {
                    "fancyguy/webroot-installer": "^1.0"
                }
            }
        }
    ],
    "require": {
        "wordpress/wordpress": "4.5.*"
    },
    "extra": {
        "webroot-dir": "content",
        "webroot-package": "wordpress/wordpress"
    }
}
```

This would install the defined `wordpress/wordpress` package in the `content` directory of the project.

## Warning

Setting the `webroot-dir` to a non-empty directory will delete the contents in most cases.  It is recommended to use a clean target within your project directory.
