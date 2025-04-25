<?php

namespace Core\Controllers;

use Core\Helpers\ResponseHelper;

class BaseController
{
    protected function successResponse($data, $message = 'Success', $code = 200)
    {
        return ResponseHelper::formatSuccessResponse($data, $message, $code);
    }

    protected function errorResponse($message, $code = 400)
    {
        return ResponseHelper::formatErrorResponse($message, $code);
    }
}