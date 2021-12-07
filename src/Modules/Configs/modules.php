<?php

return [
    'location' => 'app',
    'locations' => [
        'app' => [
            'path'      => app_path('Modules'),
            'namespace' => 'App\\Modules\\',
        ],
    ],
    'default_module' => [
        'dev' => 'Dev',
        'user' => 'Users',
        'role' => 'Roles'
    ]
];