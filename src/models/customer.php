<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

class Customer extends \dwp\core\Model
{
    const TABLENAME = 'customer';

    protected $schema = [
        'id' => [
            'type' => parent::TYPE_UINTEGER,
            'validate' => [
                'null' => false
                ],
            ],
        'createdAt' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'null' => false
                ],
            ],
        'fname' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 45,
                'null' => false
                ],
            ],
        'lname' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 45,
                'null' => false
                ],
            ],
        'gender' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'null' => false
                ],
            ],
        'phone' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'null' => true
                ],
            ],
    ];
}