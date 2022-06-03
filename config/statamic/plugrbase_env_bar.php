<?php

return [
    'path' => base_path('content/addons/plugrbase_env_bar.yaml'),

    /*
    * The possible name(s) for the environments.
    */
    'environment' => [
        'local' => 'local',
        'dev' => 'development',
        'development' => 'development',
        'staging' => 'staging',
        'acceptance' => 'staging',
        'production' => 'production',
    ],

    /*
    * The colors used for the environments.
    */
    'color' => [
        'local' => '#8D21FD',
        'development' => '#FA2DEC',
        'staging' => '#B41EE3',
        'production' => '#E31E73',
    ]
];
