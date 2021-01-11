<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

class Carts extends \dwp\core\Model
{
    const TABLENAME = 'carts';

    protected $schema = [
        'id' => [
            'type' => parent::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'amount' => [
            'type' => TYPE_UINTEGER,
            'validate' => [
                'minValue' => 1,
                'null' => false
            ],
        ],
    ];
}