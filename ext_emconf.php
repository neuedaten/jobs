<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "jobs"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Jobs',
    'description' => 'Jobs (vacancies) extension.',
    'category' => 'plugin',
    'author' => 'Bastian Schwabe',
    'author_email' => 'bas@neuedaten.de',
    'state' => 'alpha',
    'uploadfolder' => 1,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
