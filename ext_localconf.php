<?php

defined('TYPO3') or die();

// Registracija plugina u TYPO3
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'cebanner',  // Ključ ekstenzije mora biti u malim slovima
    'Cebanner', // Ključ plugina
    [
        \Gmbit\Cebanner\Controller\BannerControloer::class => 'show' // Kontroler i akcija
    ],
    // Non-cacheable actions
    [
        \Gmbit\Cebanner\Controller\BannerControloer::class => 'show'
    ]
);