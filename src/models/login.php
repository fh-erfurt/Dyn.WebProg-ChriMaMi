<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

class Login extends \dwp\core\Model
{
    const TABLENAME = 'login';

    protected $schema = [
        'id' => [
            'type' => parent::TYPE_UINTEGER,
            'validate' => [
                'null' => false
                ],
            ],
        'passwordHash' => [
            'type' => parent::TYPE_STRING,
                'validate' => [
                    'null' => false
                ],
            ],
        'email' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 25,
                'null' => false
                ],
            ],
    ];
}