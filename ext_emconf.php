<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'CE Banner',
    'description' => 'Simple TYPO3 banner content element.',
    'category' => 'plugin',
    'author' => 'Gmbit',
    'author_email' => 'info@gmbit.rs',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];