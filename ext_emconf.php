<?php

/**
 * Extension Manager/Repository config file for ext "resterland_bootstrap".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Resterland Bootstrap',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99',
            'gridelements' => '9.3.0-9.99.99'
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
