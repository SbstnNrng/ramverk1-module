<?php
/**
 * Config-file for sessions.
 */
return [
    // Session name
    //"name" => preg_replace("/[^a-z\d]/i", "", __DIR__),
    //"name" => preg_replace("/[^a-z\d]/i", "", ANAX_APP_PATH),
    "name" => preg_replace("/[^a-z\d]/i", "", ANAX_INSTALL_PATH),
];
