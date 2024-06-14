<?php

namespace Book;

use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'book' => [
                'type' => Segment::class,
                'options' => [
                    // 'route' => '/book[/:id]',
                    'route'    => '/api/book[/:action[/:id]]',
                    'defaults' => [
                        'controller' => Controller\BookController::class,
                        // 'action'     => 'index',
                        'action'     => 'getList',
                    ],
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\BookController::class => InvokableFactory::class,
            // Controller\BookController::class => Controller\Factory\BookControllerFactory::class,
        ],
    ],
    'view_manager' => [
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];
