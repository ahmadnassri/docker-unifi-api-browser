<?php
/**
 * Copyright (c) 2021, Art of WiFi
 * www.artofwifi.net
 *
 * This file is subject to the MIT license that is bundled with this package in the file LICENSE.md
 */

/**
 * INSTRUCTIONS
 * =============
 * If you wish to implement restricted access to this tool based on user name and password,
 * please follow these steps:
 *
 * - create a copy of this file, name it users.php and store in the same directory
 * - in this new file, populate the array below with user accounts as required
 * - the value for password entered must be the SHA512 hash of the password
 * - please take care in keeping the PHP syntax for the $users array intact
 * - please make sure not to create any duplicate user_name values
 * - to generate the password hash string you can use an online tool such as this one:
 *     https://passwordsgenerators.net/sha512-hash-generator/
 *
 * IMPORTANT NOTE:
 * If you do not create the users.php file or do not create any user accounts, the API browser tool
 * will be accessible without providing and means of authentication.
 */

if (getenv('UI_AUTH') === "true" ) {
    $users = [
        [
        // string, the user name
        'user_name' => getenv('UI_USER') ?: 'admin',
        // string, the SHA512 hash of the password
        'password'  => getenv('UI_PASS') ?: 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec',
        ]
    ];
}
