<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

class Addresses extends \dwp\core\Model
{
    const TABLENAME = 'addresses';

    protected $schema = [
        'id' => [
            'type' => parent::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'street' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 64,
                'null' => false
            ],
        ],
        'streetnumber' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 10,
                'null' => false
            ],
        ],
        'city' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 64,
                'null' => false
            ],
        ],
        'zip' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 5,
                'max' => 5,
                'null' => false
            ],
        ],
        'receiver' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 255,
                'null' => false
            ],
        ],
    ];
}