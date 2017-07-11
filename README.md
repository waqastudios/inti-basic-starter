# basic-starter

[![GitHub version](https://badge.fury.io/gh/waqastudios%2Finti-basic-starter.svg)](https://badge.fury.io/gh/waqastudios%2Finti-basic-starter)

A basic starter theme for the [Inti Foundation](https://github.com/waqastudios/inti-foundation) WordPress parent theme version 1.5 and above. 

## Description
The Basic Starter theme is an example child theme for Inti Foundation. Use this theme to build your own using the entirety of the Inti Foundation backend while building a completely unique frontend using Zurb Foundation 6.4 and above.

## Getting Started
### Gulp
Inti Foundation and its child themes come configured with a Gulp file that will compile your Sass and javascript changes for you with its watch function. (If your workflow doesn’t include Gulp, please review this file to see what library elements need to be compiled into a final CSS file with your own tools).

#### To begin:
 * `npm install`
 * `npm build`
 * Modify config.yml file for your setup
 * Install and add any dependencies
 * `npm default`, a new browser window will open pointing to a BrowserSync server displaying the WordPress installtion (via BrowserSync).

### Overwriting parent theme functions with custom files or by unhooking then hooking new functions
All php code is run from the Inti class in the parent theme. This looks for the individual php files to be include and includes them if found. You can either: 
 * Bypass these parent theme php files with your own with the same name in the same directory structure
 * Include new files, i.e. /framework/shortcodes/child-shortcodes.php and include them in functions.php

From functions.php
> locate_template() will first check the child theme for a file in that location, and if not found, will search the parent theme. Override parent theme files by giving the child theme versions the same name, set a unique name or add a prefix to load them in addition to parent theme files.

## More information
Check out the [Inti Foundation](https://github.com/waqastudios/inti-foundation) theme. What applies there for initial setup applies here.