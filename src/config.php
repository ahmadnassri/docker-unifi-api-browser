<?php

/**
 * Copyright (c) 2021, Art of WiFi
 * www.artofwifi.net
 *
 * This file is subject to the MIT license that is bundled with this package in the file LICENSE.md
 */

/**
 * Configuration instructions
 * ===========================
 * Create a copy of this configuration template file within the same directory, name it config.php and enter your
 * UniFi controller details and credentials below
 *
 * Multi controller configuration options
 * =======================================
 * The number of UniFi controllers that can be added is unlimited, just take care to correctly maintain
 * the array structure by following PHP syntax shown below.
 *
 * **All fields are required for each controller**
 *
 * If a controller configuration is incomplete, an error will the thrown upon selection
 */

$user = getenv('CONTROLLER_USER') ?: '';
$password = getenv('CONTROLLER_PASS') ?: '';
$ip = getenv('CONTROLLER_IP') ?: '192.168.0.1';
$port = getenv('CONTROLLER_PORT') ?: '443';
$name = getenv('CONTROLLER_NAME') ?: 'UniFi Controller';

$controllers = [
    [
        // the user name for access to the Unifi Controller
        'user'     => $user,
        // the password for access to the Unifi Controller
        'password' => $password,
        // full url to the Unifi Controller, eg. 'https://22.22.11.11:8443'
        'url'      => 'https://' . $ip . ':' . $port,
        // name for this controller which will be used in the dropdown menu
        'name'     => $name
    ]
];

/**
 * Optionally change the default values for options below
 */

// your default theme of choice, pick one from the list below:
// bootstrap, cerulean, cosmo, cyborg, darkly, flatly, journal, lumen, paper
// readable, sandstone, simplex, slate, spacelab, superhero, united, yeti
$theme           = getenv('UI_THEME') ?: 'darkly';

// class for the main navigation bar, valid options are: light, dark
$navbar_class    = getenv('UI_NAVBAR_CLASS') ?: 'dark';
// class for the main navigation bar background, valid options are:
// primary, secondary, success, danger, warning, info, light, dark, white, transparent
$navbar_bg_class = getenv('UI_NAVBAR_BG_CLASS') ?: 'dark';

// set to true (without quotes) to enable debug output to the browser and the PHP error log
// when fetching the sites collection after selecting a controller
$debug           = getenv('DEBUG') === 'true';
