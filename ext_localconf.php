<?php
defined('TYPO3') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Cebanner',
    'Banner',
    [
        \Gmbit\Cebanner\Controller\BannerController::class => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    ['Banner', 'cebanner_banner', 'EXT:cebanner/Resources/Public/Icons/Extension.svg'],
    'CType',
    'cebanner'
);