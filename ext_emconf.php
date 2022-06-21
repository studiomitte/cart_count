<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cart count',
    'description' => '',
    'category' => 'frontend',
    'author' => 'Georg Ringer',
    'author_email' => 'gr@studiomitte.com',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '0.2.0',
    'constraints' =>
        [
            'depends' => [
                'typo3' => '11.5.0-11.5.99',
                'cart' => '8.4.0-8.99.99'
            ],
            'conflicts' => [],
            'suggests' => [],
        ]
];
