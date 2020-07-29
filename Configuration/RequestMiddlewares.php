<?php
return [
    'frontend' => [


        'typo3/extension-cart-count/count' => [
            'target' => \StudioMitte\CartCount\Middleware\CartCounter::class,
            'after' => [
                'typo3/cms-frontend/tsfe',
                'typo3/cms-frontend/authentication',
            ]
        ],
    ]
];
