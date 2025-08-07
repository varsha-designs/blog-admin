<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseLaravelController;

class BaseController extends BaseLaravelController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
