<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

use \dwp\core\Model as M;

class Addresses extends \dwp\core\Model
{
    const TABLENAME = 'addresses';

    protected $schema = [
        'id' => [
            'type' => M::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'street' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 64,
                'null' => false
            ],
        ],
        'house_number' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 10,
                'null' => false
            ],
        ],
        'city' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 64,
                'null' => false
            ],
        ],
        'zip' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 5,
                'max' => 5,
                'null' => false
            ],
        ],
    ];
}