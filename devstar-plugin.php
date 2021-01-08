<?php

/**
 *  @package DevstarPlugin
 */

/*
    Plugin Name: Devstar Plugin
    Plugin URI: http://example.com.br
    Description: Developed for study
    Version: 1.0.0
    Author: Luiz Gomes
    Author URI: https://instagram.com/luizgomesdev
    License: GPLv2 or later
*/

/*
    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

    Copyright 2005-2015 Automattic, Inc.
*/

// If this file is called firectly, abort!!!
defined('ABSPATH') || die('Hey, you can\t access this file, you silly human');

// Require once the Composer Autoload
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
function activate_devstart_plugin()
{
    Inc\Base\Activate::activate();
}

register_activation_hook(__FILE__, 'activate_devstart_plugin');

/**
 * The code that runs during plugin deactivation
 */
function deactivate_devstart_plugin()
{
    Inc\Base\Deactivate::deactivate();
}

register_deactivation_hook(__FILE__, 'deactivate_devstart_plugin');

/**
 * Initialize all the core classes of the plugin
 */
if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}
