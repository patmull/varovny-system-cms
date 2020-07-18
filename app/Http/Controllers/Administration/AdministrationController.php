<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministrationController extends Controller
{
    //
    protected $limit = 5;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check-permissions');
    }
}
