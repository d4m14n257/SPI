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
                'Default' => [
                    [
                        'icon' => 'fa-home',
                        'text' => 'Inicio',
                        'path' => 'home',
                        'description' => 'Página de inicio del SPI'
                    ]
                    ],
                'Root' => [
                    [
                        'icon' => 'fa-home',
                        'text' => 'Inicio',
                        'path' => 'home',
                        'description' => 'Página de inicio del SPI'
                    ],
                    [
                        'icon' => 'fa-file-alt',
                        'text' => 'Reportes',
                        'path' => 'reporte',
                        'description' => 'Panel de generación de reportes'
                    ],
                    [
                        'icon' => 'fa-history',
                        'text' => 'Históricos',
                        'path' => 'historico',
                        'description' => 'Panel de acceso a registros históricos'
                    ],
                    [
                        'icon' => 'fa-users',
                        'text' => 'Usuarios',
                        'path' => 'usuario',
                        'description' => 'Panel de administración de usuarios'
                    ],
                    [
                        'icon' => 'fa-warehouse',
                        'text' => 'Bodegas',
                        'path' => 'bodega',
                        'description' => 'Bodegas registradas en el sistema'
                    ],
                    [
                        'icon' => 'fa-hard-hat',
                        'text' => 'Obras',
                        'path' => 'obra',
                        'description' => 'Obras activas registradas'
                    ],
                    [
                        'icon' => 'fa-exchange-alt',
                        'text' => 'Movimientos',
                        'path' => 'movimiento',
                        'description' => 'Movimientos activos registrados'
                    ],
                    [
                        'icon' => 'fa-cubes',
                        'text' => 'Productos',
                        'path' => 'producto',
                        'description' => 'Lista de productos y materiales'
                    ],
                    [
                        'icon' => 'fa-id-card-alt',
                        'text' => 'Proveedores',
                        'path' => 'proveedor',
                        'description' => 'Lista de proveedores registrados'
                    ],
                    [
                        'icon' => 'fa-money-bill-wave-alt',
                        'text' => 'Compras',
                        'path' => 'compra',
                        'description' => 'Compras realizadas'
                    ]
                ]
        ]

    ],
]);

?>