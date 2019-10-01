<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\User;
use Illuminate\Database\Eloquent\Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HelloController extends Controller
{
    public const MODEL = User::class;

    // use RESTActions;

    public function get($name)
    {
        $m = static::MODEL;
        
        try {
            $newuser = $m::create([
                'email' => $name . '@gmail.com',
                'name' => $name,
                'password' => '1234'
            ]);
            $user = $m::where('name', $name)->firstOrFail();
                return $user;
        } catch (Exception $e) {
            return 404;
        } catch (ModelNotFoundException $e) {
            return 404;
        }
    }

    public function getMessage($name)
    {
        return $this->generateMessage($name);
        // return view('hello', [ 'name' => $this->generateMessage('Bob') ]);
    }

    public function generateMessage($name) {
        return "Hello " . $name . " how are you doing!";
    }
}
