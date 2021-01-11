<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

class Products extends \dwp\core\Model
{
    const TABLENAME = 'products';

    protected $schema = [
        'id' => [
            'type' => parent::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'name' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 255,
                'null' => false
            ],
        ],
        'description' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 2000,
                'null' => false
            ],
        ],
        'category' => [
            'type' => parent::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 45,
                'null' => false
            ],
        ],
        'stdPrice' => [
            'type' => parent::TYPE_DECIMAL,
            'validate' => [
                'maxValue' => 99999999.99,
                'null' => false
            ],
        ],
    ];
}