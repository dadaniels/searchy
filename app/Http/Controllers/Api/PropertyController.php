<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Searchy\Property;
use Searchy\Transformers\PropertyTransformer;


/**
 * Class PropertyController
 * Handles Api calls
 * @package App\Http\Controllers\Api
 */
class PropertyController extends ApiController
{
    /**
     * @var Searchy\Transformers\PropertyTransformer
     */
    protected $propertyTransformer;

    function __construct(PropertyTransformer $propertyTransformer) {
        $this->propertyTransformer = $propertyTransformer;
    }

    /**
     * show all Active Programs
     *
     * @return Json Response
     */
    public function index()
    {
        $properties = Property::searchProperties(\Input::all(),$this->getLimit());
        return $this->respond([
            'data'=>$this->propertyTransformer->transformCollection($properties->all())
        ]);
    }


}
