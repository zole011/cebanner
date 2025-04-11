<?php
defined('TYPO3') or die();

return [
    'tt_content.cebanner_banner' => [
        'renderingDefinition' => [
            'templateRootPaths' => [
                10 => 'EXT:cebanner/Resources/Private/Templates/ContentElements/',
            ],
            'partialRootPaths' => [
                10 => 'EXT:cebanner/Resources/Private/Partials/',
            ],
            'layoutRootPaths' => [
                10 => 'EXT:cebanner/Resources/Private/Layouts/',
            ],
            'templateName' => 'Banner',
        ],
    ],
];