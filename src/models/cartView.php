<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

use \dwp\core\Model as M;

class CartView extends \dwp\core\Model
{
    const TABLENAME = 'cart_view';

    protected $schema = [
        'cust_id' => [
            'type' => M::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'filename' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 255,
                'null' => false
            ],
        ],
        'alt_text' => [
            'type' => M::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'p_name' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 255,
                'null' => false
            ],
        ],
        'std_price' => [
            'type' => M::TYPE_DECIMAL,
            'validate' => [
                'maxValue' => 99999999.99,
                'null' => false
            ],
        ],
        'total_price' => [
            'type' => M::TYPE_DECIMAL,
            'validate' => [
                'maxValue' => 99999999.99,
                'null' => false
            ],
        ],
        'amount' => [
            'type' => M::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ]
    ];
}