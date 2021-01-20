<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


namespace dwp\model;

use \dwp\core\Model as M;

class Products extends \dwp\core\Model
{
    const TABLENAME = 'products_view';

    protected $schema = [
        'id' => [
            'type' => M::TYPE_UINTEGER,
            'validate' => [
                'null' => false
            ],
        ],
        'category' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 45,
                'null' => false
            ],
        ],
        'description' => [
            'type' => M::TYPE_STRING,
            'validate' => [
                'min' => 2,
                'max' => 2000,
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
        'std_price' => [
            'type' => M::TYPE_DECIMAL,
            'validate' => [
                'maxValue' => 99999999.99,
                'null' => false
            ],
        ],
        'filename' => [
            'type' => M::TYPE_DECIMAL,
            'validate' => [
                'null' => false
            ],
        ],
        'alt_text' => [
            'type' => M::TYPE_DECIMAL,
            'validate' => [
                'null' => false
            ],
        ]
    ];
}