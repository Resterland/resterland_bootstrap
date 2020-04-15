<?php

/**
 * Extension Manager/Repository config file for ext "resterland_bootstrap".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Resterland Bootstrap',
    'description' => 'Extends the TYPO3 introduction bootstrap package by Benjamin Kott (https://github.com/benjaminkott/bootstrap_package).',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '10.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Resterland\\ResterlandBootstrap\\' => 'Classes',
        ],
    ],
    'state' => 'beta',
    'version' => '1.0.1',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Roland Fuhrer',
    'author_email' => 'roland@resterland.ch',
    'author_company' => 'ResterLand',
];
