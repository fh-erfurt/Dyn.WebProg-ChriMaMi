<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

use \dwp\core\Model as M;

class Customers extends \dwp\core\Model
{
    const TABLENAME = 'customers';

    protected $schema = [
        'id' => [
            'type' => M::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'firstname' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 255,
                'null' => false
            ],
        ],
        'lastname' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 255,
                'null' => false
            ],
        ],
        'gender' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 1,
                'max' => 1,
                'null' => false
            ],
        ],
        'phone' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'null' => true
            ],
        ],
        'accounts_id' => [
            'type' => M::TYPE_INTEGER,
            'validate' => [
                'null' => false
            ]
        ],
        'addresses_id' => [
            'type' => M::TYPE_INTEGER,
            'validate' => [
                'null' => false
            ]
        ]
    ];
}