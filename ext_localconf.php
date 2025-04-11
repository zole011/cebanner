<?php
defined('TYPO3') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'cebanner',  // Ključ ekstenzije, mora biti u formatu "Vendor.Extension"
    'Banner',           // Plugin naziv koji će se koristiti u backendu
    [
        'Banner' => 'show', // Kontroler i akcija koja se koristi za prikaz
    ],
    [
        // Ako imaš neka specifična opcionalna akciona dugmad, ovde ih možeš dodati
    ]
);