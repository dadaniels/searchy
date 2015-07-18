<?php
namespace Searchy;

use Illuminate\Config\Repository;

class Property extends \Eloquent {


    /**
     * Search filters
     * get var = db filed name | operator
     * @var array
     */
    public static $search_filters = array(
        'bedrooms' => 'bedrooms|=',
        'bathrooms' => 'bathrooms|=',
        'storeys' => 'storeys|=',
        'garages' => 'garages|=',
        'lower_price'=>'price|>=',
        'higher_price'=>'price|<='
    );

    /**
     * Advance Search filter
     * @param array $inputs
     * @param int $limit
     * @return mixed
     */
    public static function searchProperties($inputs = [],$limit) {
        $name = isset($inputs['name']) ? $inputs['name'] : '';
        $query = Property::where('name','like',"%$name%");

       $filters = self::$search_filters;
       foreach($filters as $key => $field) {
           $field = explode('|',$field);
           if(isset($inputs[$key]) && $inputs[$key] != '') {
               $query->where($field[0],$field[1],$inputs[$key]);
           }
       }
        return $query->paginate($limit);
    }
}