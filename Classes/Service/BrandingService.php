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
    const EXT_KEY = 'resterland_bootstrap';

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

            $backendConfiguration['loginLogo'] = 'EXT:resterland_bootstrap/Resources/Public/Images/Logos/Resterland/RL_text_blue-150x32.png';
            $backendConfiguration['loginHighlightColor'] = '#b84c21';
            $backendConfiguration['loginBackgroundImage'] = 'EXT:resterland_bootstrap/Resources/Public/Images/Logos/Resterland/ResterlandLogo.svg';
            $backendConfiguration['loginFootnote'] = 'Welcome To ResterLand Development Project';
            $backendConfiguration['backendLogo'] = 'EXT:resterland_bootstrap/Resources/Public/Images/Logos/Resterland/ResterlandLogo.png';
            $backendConfiguration['backendFavicon'] = 'EXT:resterland_bootstrap/Resources/Public/Icons/Favicons/Default/favicon.ico';

            $extensionConfiguration->set('backend', '', $backendConfiguration);
        }
    }
}
