<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cart count',
    'description' => '',
    'category' => 'frontend',
    'author' => 'Georg Ringer',
    'author_email' => 'gr@studiomitte.com',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '1.1.0',
    'constraints' =>
        [
            'depends' => [
                'typo3' => '12.4.0-13.4.99',
                'cart' => '9.0.0-11.99.99'
            ],
            'conflicts' => [],
            'suggests' => [],
        ]
];
