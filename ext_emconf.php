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
            'typo3' => '10.4.0-10.9.99',
            'fluid_styled_content' => '10.4.0-10.9.99',
            'rte_ckeditor' => '10.4.0-10.9.99',
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
    'version' => '2.0.0',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Roland Fuhrer',
    'author_email' => 'roland@resterland.ch',
    'author_company' => 'ResterLand',
];
