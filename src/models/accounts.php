<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

class Accounts extends \dwp\core\Model
{
    const TABLENAME = 'accounts';

    protected $schema = [
        'id' => [
            'type' => parent::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'email' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 255,
                'null' => false
            ],
        ],
        'passwordHash' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 8,
                'max' => 255,
                'null' => false
            ],
        ],
    ];
}