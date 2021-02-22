<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

use \dwp\core\Model as M;

class OrdersHasProducts extends \dwp\core\Model
{
    const TABLENAME = 'orders_has_products';

    protected $schema = [
        'id' => [
            'type' => parent::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'orders_id' => [
            'type' => M::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'products_id' => [
            'type' => M::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'amount' => [
            'type' => M::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'price' => [
            'type' => M::TYPE_DECIMAL,
            'validate' => [
                'maxValue' => 99999999.99,
                'null' => false
            ],
        ]
    ];
}