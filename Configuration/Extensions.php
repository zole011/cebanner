<?php
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(static function () {
    // Registracija TypoScript fajlova
    ExtensionManagementUtility::addTypoScriptSetup(
        "@import 'EXT:cebanner/Configuration/TypoScript/setup.typoscript'"
    );
    ExtensionManagementUtility::addTypoScriptConstants(
        "@import 'EXT:cebanner/Configuration/TypoScript/constants.typoscript'"
    );
})();