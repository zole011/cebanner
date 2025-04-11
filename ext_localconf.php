<?php
defined('TYPO3') or die();

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        [
            'CE Banner', // Naslov koji ćeš videti u backendu
            'cebanner_banner', // CType vrednost, mora da se poklapa sa TypoScript-om i TCA
            'content-textpic' // Opcionalno ikonica, možeš staviti i custom kasnije
        ],
        'CType',
        'cebanner' // ključ tvoje ekstenzije, sve malim slovima
    );
});