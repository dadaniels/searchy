<?php

namespace Searchy\Transformers;

class PropertyTransformer extends Transformer {

    /**
     * data to transform
     * @param $property
     * @return array
     */
    public function transform($property) {
        return [
            'id' => $property['id'],
            'property' => $property['name'], // so we can change field name, this will help us in the future in case we decided to rename tbl field
            'price' => number_format($property['price'],2),
            'bedrooms' => $property['bedrooms'],
            'bathrooms' => $property['bathrooms'],
            'storeys' => $property['storeys'],
            'garages' => $property['garages'],

        ];
    }
}