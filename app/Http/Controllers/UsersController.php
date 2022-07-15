<?php

namespace App\Http\Controllers;

use App\Models\Code;


use Illuminate\Http\Request;

class UsersController extends Controller
{

    public $result;

    public function getDataAction()
    {
        foreach (Code::all() as $flight) {
            $result = $flight->id;
        }

        var_dump($result);
            return view('main');
    }
}
