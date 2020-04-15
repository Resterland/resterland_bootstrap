<?php
defined('TYPO3_MODE') || die();

/**
 * Temporary variables
 */
$extensionKey = 'resterland_bootstrap';

/**
 * Default PageTS for ResterlandBootstrap
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Main/All.tsconfig',
    'Resterland Bootstrap'
);

/**
 * workaround for all pages "Hide page if no translation for current language exists".
 * This checkbox is available for every page under the tab "language".
 * To automaticly set this flag for new created pages:
 */
$GLOBALS['TCA']['pages']['columns']['l18n_cfg']['config']['default'] = 2;
