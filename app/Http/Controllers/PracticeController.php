<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{

    /**
    *
    */
    public function practice2() {
        dump(config('app'));
    }

    /**
    *
    */
    public function practice1() {
      dump('This is the first example.');
    }

    /**
    * ANY (GET/POST/PUT/DELETE)
    * /practice/{n?}
    *
    * This method accepts all requests to /practice/ and
    * invokes the appropriate method.
    *
    * http://localhost/practice/1 => Invokes practice1
    * http://localhost/practice/5 => Invokes practice5
    * http://localhost/practice/999 => Invokes practice999
    */
    public function index($n) {

        $method = 'practice'.$n;

        if(method_exists($this, $method))
            return $this->method();
        else
            dd("Practice route [{$n}] not defined");
    }
}
