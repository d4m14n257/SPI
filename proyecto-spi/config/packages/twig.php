<!-- // config/packages/twig.php -->
<?php

// Definir las vistas del menu por cada rol

// [
//     'icon' => 'fa-bell',
//     'text' => [
//         [
//             'icon' => 'fa-check-circle',
//             'text' => 'SubSeccion 1',
//             'path' => 'home',
//             'color' => 'bg-indigo',
//             'description' => 'Descripción del elemento'
//         ], 
//         [
//             'icon' => 'fa-check-circle',
//             'text' => 'SubSeccion 2',
//             'path' => 'home',
//             'color' => 'bg-lightblue',
//             'description' => 'Descripción del elemento'
//         ],
//         [
//             'icon' => 'fa-check-circle',
//             'text' => 'SubSeccion 2',
//             'path' => 'home',
//             'color' => 'bg-navy',
//             'description' => 'Descripción del elemento'
//         ]
//         ],
//         'title' => 'Subsecciones'
// ],

$container->loadFromExtension('twig', [
    'globals' => [
        'Menus' => [
            'Bodeguero' => [
                [
                    'icon' => 'fa-check-circle',
                    'text' => [
                        [
                            'icon' => 'fa-check-circle',
                            'text' => 'SubSeccion 1',
                            'path' => 'home',
                            'color' => 'bg-indigo',
                            'description' => 'Descripción del elemento'
                        ], 
                        [
                            'icon' => 'fa-check-circle',
                            'text' => 'SubSeccion 2',
                            'path' => 'home',
                            'color' => 'bg-lightblue',
                            'description' => 'Descripción del elemento'
                        ],
                        [
                            'icon' => 'fa-check-circle',
                            'text' => 'SubSeccion 2',
                            'path' => 'home',
                            'color' => 'bg-navy',
                            'description' => 'Descripción del elemento'
                        ]
                        ],
                    'path' => 'home',
                    'color' => 'bg-purple',
                    'description' => 'Descripción del elemento',
                    'title' => 'Subsecciones'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 2',
                    'path' => 'reporte',
                    'color' => 'bg-fuchsia',
                    'description' => 'Descripción del elemento'
                ]
            ],
            'Administrador' => [
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 1',
                    'path' => 'home',
                    'color' => 'bg-pink',
                    'description' => 'Descripción del elemento'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 2',
                    'path' => 'reporte',
                    'color' => 'bg-maroon',
                    'description' => 'Descripción del elemento'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 3',
                    'path' => 'home',
                    'color' => 'bg-info',
                    'description' => 'Descripción del elemento'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 4',
                    'path' => 'home',
                    'color' => 'bg-olive',
                    'description' => 'Descripción del elemento'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 5',
                    'path' => 'home',
                    'color' => 'bg-danger',
                    'description' => 'Descripción del elemento'
                ],
                [
                    'icon' => 'fa-check-circle',
                    'text' => 'Seccion 6',
                    'path' => 'home',
                    'color' => 'bg-success',
                    'description' => 'Descripción del elemento'
                ]
                ],
                'Default' => [
                    [
                        'icon' => 'fa-home',
                        'text' => 'Inicio',
                        'path' => 'home',
                        'color' => 'bg-primary',
                        'description' => 'Página de inicio del SPI'
                    ]
                    ],
                'Root' => [
                    [
                        'icon' => 'fa-home',
                        'text' => 'Inicio',
                        'path' => 'home',
                        'color' => 'bg-indigo',
                        'description' => 'Página de inicio del SPI'
                    ],
                    [
                        'icon' => 'fa-file-alt',
                        'text' => 'Reportes',
                        'path' => 'reporte',
                        'color' => 'bg-primary',
                        'description' => 'Panel de generación de reportes'
                    ],
                    [
                        'icon' => 'fa-history',
                        'text' => 'Históricos',
                        'path' => 'historico',
                        'color' => 'bg-lightblue',
                        'description' => 'Panel de acceso a registros históricos'
                    ],
                    [
                        'icon' => 'fa-users',
                        'text' => 'Usuarios',
                        'path' => 'usuario',
                        'color' => 'bg-pink',
                        'description' => 'Panel de administración de usuarios'
                    ],
                    [
                        'icon' => 'fa-warehouse',
                        'text' => 'Bodegas',
                        'path' => 'bodega',
                        'color' => 'bg-purple',
                        'description' => 'Bodegas registradas en el sistema'
                    ],
                    [
                        'icon' => 'fa-hard-hat',
                        'text' => 'Obras',
                        'path' => 'obra',
                        'color' => 'bg-olive',
                        'description' => 'Obras activas registradas'
                    ],
                    [
                        'icon' => 'fa-exchange-alt',
                        'text' => 'Movimientos',
                        'path' => 'movimiento',
                        'color' => 'bg-teal',
                        'description' => 'Movimientos activos registrados'
                    ],
                    [
                        'icon' => 'fa-cubes',
                        'text' => 'Productos',
                        'path' => 'producto',
                        'color' => 'bg-orange',
                        'description' => 'Lista de productos y materiales'
                    ],
                    [
                        'icon' => 'fa-id-card-alt',
                        'text' => 'Proveedores',
                        'path' => 'proveedor',
                        'color' => 'bg-danger',
                        'description' => 'Lista de proveedores registrados'
                    ],
                    [
                        'icon' => 'fa-money-bill-wave-alt',
                        'text' => 'Compras',
                        'path' => 'compra',
                        'color' => 'bg-gray-dark',
                        'description' => 'Compras realizadas'
                    ]
                ]
        ]

    ],
]);

?>