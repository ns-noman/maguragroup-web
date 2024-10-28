<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        $weather = @file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=1185241&lang=en&units=metric&APPID=8f5de18abbc963cb66b7b05f85fa06b7');
        return response()->json(json_decode($weather), 200);
    }
}
