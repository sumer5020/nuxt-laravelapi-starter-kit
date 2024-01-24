<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ActivityLogger;
use App\Http\Controllers\Controller;
use App\Helpers\HttpResponses;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        // This function is monitored by ActivityLogger
        ActivityLogger::log('HomeController.welcome', 'debug', 'test log', ['Ping' => 'Pong']);
        
        return HttpResponses::success([
            "openapi"=>"3.1.0",
            "info"=>[
                "title"=>env('APP_NAME','Laravel'),
                "version"=>env('APP_VERSION','0.0.1'),
                "description"=>env('APP_DESCRIPTION','API gateway'),
            ],
            "servers"=>[
                ["url"=>env('APP_URL','http://localhost:8000').'/'.env('LATEST_APP_PATH','v1'),],
            ]
        ]);
    }

    # Latest api path home
    public function index()
    {
        return HttpResponses::success([],"welcome");
    }
}
