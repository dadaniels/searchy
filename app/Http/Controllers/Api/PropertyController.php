<?php

namespace App\Http\Controllers\Api;

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
        $properties = Property::paginate($this->getLimit());
        return $this->respondWithPagination($properties,[
            'data'=>$this->propertyTransformer->transformCollection($properties->all())
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


}
