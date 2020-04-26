<?php

defined('TYPO3_MODE') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Temporary variables
 */
$extensionKey = 'resterland_bootstrap';

/**
 * Default PageTS for ResterlandBootstrap
 */

// BackendLayouts
ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig',
        'Resterland Bootstrap: Backend Layouts'
);

// TCEMAIN
ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/TCEMAIN.tsconfig',
    'Resterland Bootstrap: TCEMAIN'
);

// TCEFORM
ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/TCEFORM.tsconfig',
    'Resterland Bootstrap: TCEFORM'
);

// SHARED
ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/Mod/SHARED.tsconfig',
    'Resterland Bootstrap: SHARED'
);

/**
 * workaround for all pages "Hide page if no translation for current language exists".
 * This checkbox is available for every page under the tab "language".
 * To automaticly set this flag for new created pages:
 */
$GLOBALS['TCA']['pages']['columns']['l18n_cfg']['config']['default'] = 2;
