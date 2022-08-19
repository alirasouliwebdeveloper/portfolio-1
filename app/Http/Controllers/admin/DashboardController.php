<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $message = '';
    private $response = '';
    private $statusCode = '';


    public function __construct()
    {

    }

    public function index()
    {
        $this->message = 'Salam';
        $this->statusCode = 200;
        return response()->json(['message' => $this->message, 'response' => $this->response, 'status_code' => $this->statusCode] , 200);
    }
}
