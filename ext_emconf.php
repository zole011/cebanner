<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'cebanner',
    'description' => 'this is a test extension',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.4.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Gmbit\\Cebanner\\' => 'Classes/',
        ],
    ],
];
