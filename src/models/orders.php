<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

class Orders extends \dwp\core\Model
{
    const TABLENAME = 'orders';

    protected $schema = [
        'id' => [
            'type' => parent::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'status' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 15,
                'null' => false
            ],
        ],
        'order_date' => [
            'type' => parent::TYPE_DATE,
            'validate' => [
                'null' => false
            ],
        ],
        'addresses_id' => [
            'type' => parent::TYPE_INTEGER,
            'validate' => [
                'min' => 1,
                'null' => false
            ],
        ],
        'members_id' => [
            'type' => parent::TYPE_INTEGER,
            'validate' => [
                'min' => 1,
                'null' => false
            ],
        ]
    ];
}