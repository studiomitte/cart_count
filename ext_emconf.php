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
                'typo3' => '12.4.0-12.4.99',
                'cart' => '9.0.0-9.99.99'
            ],
            'conflicts' => [],
            'suggests' => [],
        ]
];
