<?php

namespace Album;

return array(
    'di' => array(
        'instance' => array(
            'alias' => array(
                'album' => 'Album\Controller\AlbumController',
            ),
            'Album\Controller\AlbumController' => array(
                'parameters' => array(
                    // 'albumTable' => 'Album\Model\AlbumTable',
                    'em' => 'doctrine_em',
                ),
            ),
            'Zend\View\Resolver\TemplatePathStack' => array(
                'parameters' => array(
                    'paths' => array(
                        'album' => __DIR__ . '/../view',
                    ),
                ),
            ),
        ),
        'orm_driver_chain' => array(
            'parameters' => array(
                'Album' => array(
                    'class' => 'Doctrine\ORM\Driver\AnnotationDriver',
                    'namespace' => __NAMESPACE__ . '\Entity',
                    'paths' => array(
                        __DIR__ . '/../src/' . __NAMESPACE__ . '/Entity'
                    ),
                ),
            ),
        ),
    ),
);