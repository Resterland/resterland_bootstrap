<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['resterland_bootstrap'] = 'EXT:resterland_bootstrap/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:resterland_bootstrap/Configuration/TsConfig/Page/All.tsconfig">');
