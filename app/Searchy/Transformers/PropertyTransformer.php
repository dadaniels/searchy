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
            'name' => $property['name'],
            'price' => $property['price'],
            'bedrooms' => $property['bedrooms'],
            'bathrooms' => $property['bathrooms'],
            'storeys' => $property['storeys'],
            'garages' => $property['garages'],

        ];
    }
}