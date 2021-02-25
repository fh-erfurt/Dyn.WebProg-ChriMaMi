<?php

use dwp\model\Products as Products;

/**
 * @copyright Christoph Frischmuth
 * @funktion function maps of the products_view to a JSON-File
 */

if (!is_dir(ASSETSPATH . 'JSON')) {
    mkdir(ASSETSPATH . 'JSON');

    if (!file_exists(ASSETSPATH . 'JSON/products.json')) {
        $allProducts = Products::find();
        foreach ($allProducts as $key => $value) {
            $jsonArray[$key] = array(
                'id' => $allProducts[$key]->id,
                'name' => $allProducts[$key]->name,
                'description' => $allProducts[$key]->description,
                'std_price' => $allProducts[$key]->std_price,
                'picture' => $allProducts[$key]->filename,
                'alt_text' => $allProducts[$key]->alt_text,
                'category' => $allProducts[$key]->category
            );
            /*        echo var_dump($jsonArray[$key]['category']);
                    exit();*/

            switch ($jsonArray[$key]['category']) {
                case "fire_protection":
                    $jsonArray[$key]['category'] = 'Brandschutz';
                    break;
                case "heat_protection":
                    $jsonArray[$key]['category'] = 'Wärmeschutz';
                    break;
                case "structural_planning":
                    $jsonArray[$key]['category'] = 'Tragwerkplanung';
                    break;
                case "input_planning":
                    $jsonArray[$key]['category'] = 'Eingabeplaung';
                    break;
                default:
                    $jsonArray[$key]['category'] = 'Unbekannte Kategorie';
                    break;
            }
        }
        $json = json_encode($jsonArray);
        $file = file_put_contents(ASSETSPATH . 'json/products.json', $json);
    }
}