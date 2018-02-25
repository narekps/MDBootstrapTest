<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'navigation'      => [
        'default' => [
            [
                'label' => 'Home',
                'route' => 'home',
                'class' => 'nav-item', // applied to <li> element
            ],
            [
                'label' => 'About',
                'route' => 'application',
                'params' => [
                    'action' => 'about',
                ],
                'class' => 'nav-item',
            ],
        ],
        // other menues
    ],
    'service_manager' => [
        'factories' => [
            'navigation'         => \Zend\Navigation\Service\DefaultNavigationFactory::class,
            'abstract_factories' => [
                \Zend\Navigation\Service\NavigationAbstractServiceFactory::class,
            ],
        ],
    ],
];
