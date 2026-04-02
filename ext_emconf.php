<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cart count',
    'description' => '',
    'category' => 'frontend',
    'author' => 'Georg Ringer',
    'author_email' => 'gr@studiomitte.com',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '1.0.1',
    'constraints' =>
        [
            'depends' => [
                'typo3' => '13.4.0-13.4.99',
                'cart' => '11.5.0-11.99.99'
            ],
            'conflicts' => [],
            'suggests' => [],
        ]
];
