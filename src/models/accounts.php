<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

use \dwp\core\Model as M;

class Accounts extends \dwp\core\Model
{
    const TABLENAME = 'accounts';

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
    ];
}