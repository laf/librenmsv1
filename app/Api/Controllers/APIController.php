<?php

namespace App\Api\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function __construct() {

    }

    public function list_devices() {
        return DB::table('devices')->get();
    }
}
