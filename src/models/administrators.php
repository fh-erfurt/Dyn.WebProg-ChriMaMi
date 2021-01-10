<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

class Administrators extends \dwp\core\Model
{
    const TABLENAME = 'administrators';

    protected $schema = [
        'id' => [
            'type' => parent::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'username' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 255,
                'null' => false
            ],
        ],
    ];
}