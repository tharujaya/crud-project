<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Response;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Response as Res;

/**
 * Class ApiController
 * @package App\Modules\Api\Lesson\Controllers
 */
class ApiController extends Controller{

    /**
     * @var int
     */
    protected $statusCode = Res::HTTP_OK;
    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    /**
     * @param $message
     * @return json response
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function respondCreated($message, $data=null){
        return $this->respond([
            'status' => 'success',
            'status_code' => Res::HTTP_CREATED,
            'message' => $message,
            'data' => $data
        ]);
    }

    /**
     * @param Paginator $paginate
     * @param $data
     * @return mixed
     */
    protected function respondWithPagination(Paginator $paginate, $data, $message){
        $data = array_merge($data, [
            'paginator' => [
                'total_count'  => $paginate->total(),
                'total_pages' => ceil($paginate->total() / $paginate->perPage()),
                'current_page' => $paginate->currentPage(),
                'limit' => $paginate->perPage(),
            ]
        ]);
        return $this->respond([
            'status' => 'success',
            'status_code' => Res::HTTP_OK,
            'message' => $message,
            'data' => $data
        ]);
    }

    public function respondNotFound($message = 'Not Found!'){
        return $this->respond([
            'status' => 'error',
            'status_code' => Res::HTTP_NOT_FOUND,
            'message' => $message,
        ]);
    }

    public function respondInternalError($message){
        return $this->respond([
            'status' => 'error',
            'status_code' => Res::HTTP_INTERNAL_SERVER_ERROR,
            'message' => $message,
        ]);
    }
    public function respondValidationError($message, $errors){
        return $this->respond([
            'status' => 'error',
            'status_code' => Res::HTTP_UNPROCESSABLE_ENTITY,
            'message' => $message,
            'data' => $errors
        ]);
    }
    public function respond($data, $headers = []){
        return Response::json($data, $this->getStatusCode(), $headers);
    }
        public function respondWithError($message){
        return $this->respond([
            'status' => 'error',
            'status_code' => Res::HTTP_UNAUTHORIZED,
            'message' => $message,
        ]);
    }

    /**
     * Generate Response
     * @param $data
     * @param $type
     * @param null $id
     * @return mixed
     */
    public function makeResponse($data, $type, $id = NULL) {

        // If the id parameter doesn't exist return all the records
        if ($id === NULL) {
            if ($data) {
                return $this->respond([
                    'status' => 'success',
                    'status_code' => $this->getStatusCode(),
                    'message' => $type,
                    'data' => $data
                ]);
            } else {
                return $this->respondNotFound('Records not found');
            }
        }

        // Find and return a single record.
        $id = (int) $id;
        if ($id <= 0) {
            return $this->respondInternalError('Id Not found');
        }

        $singleObject = NULL;

        if (!empty($data)) {
            foreach ($data as $key => $value) {
                if (isset($value['id']) && $value['id'] == $id) {
                    $singleObject = $value;
                }
            }
        }

        if (!empty($singleObject)) {
            return $this->respond([
                'status' => 'success',
                'status_code' => $this->getStatusCode(),
                'message' => $type,
                'data' => $singleObject
            ]);
        } else {
            return $this->respondNotFound('Records not found');
        }
    }
}