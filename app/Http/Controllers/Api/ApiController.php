<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller {

    /**
     * @var int
     */
    protected $statusCode = 200;

    /**
     * return limit records
     * @var int
     */
    protected $limit = 20;

    /**
     * @return int
     */
    public function getLimit()
    {
        return \Input::get('limit') && \Input::get('limit') <= $this->limit ? (int) \Input::get('limit') : $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    /**
     *
     * @param mixed $statusCode
     * @return object
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Normal return data
     * @param $data
     * @param array $headers
     * @return mixed
     */
    public function respond($data,$headers = []) {
        return Response::json($data,$this->getStatusCode(),$headers);
    }
}