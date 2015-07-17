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

    /**
     * Return 404 error code with Custom error Message
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($message = 'Not Found!') {
        return $this->setStatusCode(404)->respondWithError($message);
    }


    /**
     * @param $collection
     * @param $data
     * @return mixed
     */
    public function respondWithPagination($collection,$data) {
        $data = array_merge($data,[
            'paginate'    => [
                'total_count'   => $collection->total(),
                'total_pages'   => ceil($collection->total() /  $collection->perPage()),
                'current_page'   => $collection->currentPage(),
                'limit' => $collection->perPage()
            ]
        ]);
        return $this->respond($data);
    }



    /**
     * respondWithError like 404,403 etc
     * @param string $message
     * @return mixed
     */
    public function respondWithError($message = 'Not Found!') {
        return $this->respond([
            'error' => [
                'message'   => $message,
                'status_code'   => $this->getStatusCode()
            ]
        ]);
    }


}