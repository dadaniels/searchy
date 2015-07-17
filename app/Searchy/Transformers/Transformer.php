<?php

namespace Searchy\Transformers;

abstract class Transformer {

    /**
     * transform data and dont return all columns
     * Transform data reason: so that in the future we decide to rename a column, we dont have to change it on the implementation
     * Like name changed it to property_name, on the implementation it was used as name
     * @param $items
     * @return array
     */
    public function transformCollection(array $items) {
        return array_map([$this,'transform'],$items);
    }

    public abstract function transform($item);
}