<?php
defined('TYPO3') or die();

return [
    'types' => [
        'cebanner_banner' => [
            'showitem' => '
                --palette--;General;general,
                header, subheader, bodytext, image,
                --div--;Access, hidden,starttime,endtime
            ',
        ],
    ],
];
