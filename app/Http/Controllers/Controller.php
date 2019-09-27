<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get($name)
    {
        return $this->generateMessage($name);
        // return view('hello', [ 'name' => $this->generateMessage('Bob') ]);
    }

    public function generateMessage($name) {
        return "Hello " . $name . " how are you doing!";
    }
}
