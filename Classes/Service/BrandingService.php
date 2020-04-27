<?php

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Resterland\ResterlandBootstrap\Service;

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * BrandingService
 */
class BrandingService
{
    /**
     * @var string
     */
    const EXT_KEY = 'bootstrap_package';

    /**
     * @param string $extension
     */
    public function setBackendStyling($extension = null)
    {
        if ($extension === self::EXT_KEY && class_exists(ExtensionConfiguration::class)) {
            $extensionConfiguration = GeneralUtility::makeInstance(
                ExtensionConfiguration::class
            );
            $backendConfiguration = $extensionConfiguration->get('backend');

            if (!isset($backendConfiguration['loginLogo']) || empty(trim($backendConfiguration['loginLogo']))) {
                $backendConfiguration['loginLogo'] = 'EXT:resterland/Resources/Public/Images/Logos/Resterland/RL_text_blue-150x32.png';
            }
            if (!isset($backendConfiguration['loginHighlightColor']) || empty(trim($backendConfiguration['loginHighlightColor']))) {
                $backendConfiguration['loginHighlightColor'] = '#b84c21';
            }
            if (!isset($backendConfiguration['loginBackgroundImage']) || empty(trim($backendConfiguration['loginBackgroundImage']))) {
                $backendConfiguration['loginBackgroundImage'] = 'EXT:resterland/Resources/Public/Images/Logos/Resterland/ResterlandLogo.svg';
            }
            if (!isset($backendConfiguration['loginFootnote']) || empty(trim($backendConfiguration['loginFootnote']))) {
                $backendConfiguration['loginFootnote'] = 'Welcome To ResterLand Development Project';
            }
            if (!isset($backendConfiguration['backendLogo']) || empty(trim($backendConfiguration['backendLogo']))) {
                $backendConfiguration['backendLogo'] = 'EXT:resterland/Resources/Public/Images/Logos/Resterland/ResterlandLogo.png';
            }
            if (!isset($backendConfiguration['backendFavicon']) || empty(trim($backendConfiguration['backendFavicon']))) {
                $backendConfiguration['backendFavicon'] = 'EXT:resterland/Resources/Public/Icons/Favicons/Default/favicon.ico';
            }

            $extensionConfiguration->set('backend', '', $backendConfiguration);
        }
    }
}
