<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'ResterLand Site Package',
    'description' => 'A TYPO3 package based on the pure.css (https://pure-css.github.io/) framework.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Resterland\\Rlt3PurePackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Roland Fuhrer',
    'author_email' => 'webmaster@resterland.org',
    'author_company' => 'ResterLand WebAtelier',
    'version' => '1.0.0',
];
