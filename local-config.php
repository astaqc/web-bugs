<?php

/**
 * Add your local changes here and copy to local_config.php
 */

$site_data = [
    'method' => 'https',
    'url' => 'bugzilla-op.herokuapp.com',
    'basedir' => '/bugs',
    'email' => 'php-bugs@lists.php.net',
    'doc_email' => 'doc-bugs@lists.php.net',
    'security_email' => 'security@php.net',
    'db' => 'd5qshg2hgkfbm7',
    'db_user' => 'dnirqgpopdveqj',
    'db_pass' => '20b7133a0996256909cc6f13fc891381998dd0a7dfd478c6419c38c9d65eb061',
    'db_host' => 'ec2-3-215-76-208.compute-1.amazonaws.com',
    'patch_tmp' => "{$ROOT_DIR}/uploads/patches/",
];

define('DEVBOX', false);
