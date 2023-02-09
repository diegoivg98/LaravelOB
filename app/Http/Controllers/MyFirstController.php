<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

class MyFirstController extends Controller
{

    public function myControllerFunction(Request $request,$id = null){
        echo "Hola ID".$id."<br/>";
        echo $request->input('param');
    }

    public function contactPage(){
        return view('contact');
    }

    public function processContact(Request $request){
        echo "Formulario completado";
        die();
    }

    public function processContactPut(Request $request){
        echo "Formulario completado con PUT";
        die();
    }
}
