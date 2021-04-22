// config/packages/twig.php
<?php

// Definir las vistas del menu por cada rol

$container->loadFromExtension('twig', [
    'globals' => [
        'Menus' => [
            'Bodeguero' => [
                [
                    'icon' => 'fa-bell',
                    'text' => [
                        [
                            'icon' => 'fa-check-circle',
                            'text' => 'SubSeccion 1',
                            'path' => 'home'
                        ], 
                        [
                            'icon' => 'fa-check-circle',
                            'text' => 'SubSeccion 2',
                            'path' => 'home'
                        ],
                        [
                            'icon' => 'fa-check-circle',
                            'text' => 'SubSeccion 2',
                            'path' => 'home'
                        ]
                        ],
                        'title' => 'Subsecciones'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 1',
                    'path' => 'home'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 2',
                    'path' => 'reporte'
                ]
            ],
            'Administrador' => [
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 1',
                    'path' => 'home'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 2',
                    'path' => 'reporte'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 3',
                    'path' => 'home'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 4',
                    'path' => 'home'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 5',
                    'path' => 'home'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 6',
                    'path' => 'home'
                ]
            ]
        ]

    ],
]);

?>