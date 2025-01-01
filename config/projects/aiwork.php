<?php

return [
    'created_at' => '2024-01-28 00:00:00',
    'updated_at' => '2024-01-28 00:00:00',
    'navigation' => [
        [
            'label' => 'Gallery of Work',
            'url' => ['project.home', ['aiwork','home']],
            'icon' => 'img/sidebar/icons.svg#design'
        ]
    ],
    'view' => 'projects.aiwork.home',
    'routes' => [
        'gallery' => [
            'view' => 'projects.aiwork.gallery',
        ]
    ],
];
