<?php

defined('TYPO3_MODE') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'resterland_bootstrap';

    /**
     * Default TypoScript for ResterlandBootstrap
     */
    ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Resterland Bootstrap'
    );
});
