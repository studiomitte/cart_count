<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cart count',
    'description' => '',
    'category' => 'frontend',
    'author' => 'Georg Ringer',
    'author_email' => 'gr@studiomitte.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.1.2',
    'constraints' =>
        [
            'depends' => [
                'typo3' => '9.5.9-10.4.90',
                'cart' => ''
            ],
            'conflicts' => [],
            'suggests' => [],
        ]
];
