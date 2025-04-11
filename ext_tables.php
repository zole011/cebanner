<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'cebanner',    // Naziv tvoje ekstenzije
    'Configuration/TypoScript',  // Putanja do TypoScript foldera
    'Banner'        // Naziv koji se pojavljuje u Backend-u
);
