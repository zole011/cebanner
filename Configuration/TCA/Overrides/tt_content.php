<?php
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Dodaj novi CType u backend
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',      // polje
    [
        'Banner', // Label prikazan u backendu
        'cebanner_banner', // Vrednost CType-a
        'content-image', // Ikonica (možeš kasnije promeniti)
    ],
    'textmedia', // Gde da ubaci (posle 'textmedia')
    'after'
);

// Definiši polja koja želiš da vidiš u formi
$GLOBALS['TCA']['tt_content']['types']['cebanner_banner'] = [
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        header,
        subheader,
        bodytext,
        image,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended
    ',
];
