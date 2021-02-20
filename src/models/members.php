<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

use \dwp\core\Model as M;

class Members extends \dwp\core\Model
{
    const TABLENAME = 'members';

    protected $schema = [
        'id' => [
            'type' => M::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'email' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 255,
                'null' => false
            ],
        ],
        'password_hash' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 8,
                'max' => 255,
                'null' => false
            ],
        ],
        'roll' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'values' => ['user', 'admin'],
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
        'addresses_id' => [
            'type' => M::TYPE_INTEGER,
            'validate' => [
                'null' => false
            ]
        ]
    ];
}