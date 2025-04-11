<?php

defined('TYPO3') or die();

// Dodavanje novog content elementa za plugin
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'CeBanner Plugin', // Naziv koji će biti prikazan u backendu
        'cebanner_banner',  // Unikatni ključ za plugin (extension_key + plugin_name)
        'EXT:cebanner/Resources/Public/Icons/user_plugin_hellome.svg' // Ikonica plugin-a (opciono)
    ],
    'list_type',
    'cebanner' // Ključ ekstenzije
);

// Konfiguracija prikaza plugina u backendu
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['cebanner_banner'] = 'layout,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['cebanner_banner'] = 'pi_flexform';

// Ako želiš da koristiš Flexform, možeš ga registrovati ovako (opciono):
// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
//     'hellome_hello',
//     'FILE:EXT:hellome/Configuration/FlexForms/flexform_hellome.xml'
// );
