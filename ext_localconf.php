<?php

defined('TYPO3_MODE') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['resterland_bootstrap'] = 'EXT:resterland_bootstrap/Configuration/RTE/Default.yaml';

// Add BackendLayouts for the BackendLayout DataProvider
ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:resterland_bootstrap/Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig">');

// SHARED
ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:resterland_bootstrap/Configuration/TsConfig/Page/Mod/SHARED.tsconfig">');

// RTE
ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:resterland_bootstrap/Configuration/TsConfig/Page/RTE.tsconfig">');

// TCEMAIN
ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:resterland_bootstrap/Configuration/TsConfig/Page/TCEMAIN.tsconfig">');

// TCEFORM
ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:resterland_bootstrap/Configuration/TsConfig/Page/TCEFORM.tsconfig">');


