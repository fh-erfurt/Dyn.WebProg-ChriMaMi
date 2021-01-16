<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

use \dwp\core\Model as M;

class Administrators extends \dwp\core\Model
{
    const TABLENAME = 'administrators';

    protected $schema = [
        'id' => [
            'type' => M::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'name' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 255,
                'null' => false
            ],
        ],
        'accounts_id' => [
            'type' => M::TYPE_INTEGER,
            'validate' => [
                'min' => 2,
                'max' => 255,
                'null' => false
            ]
        ]
    ];
}