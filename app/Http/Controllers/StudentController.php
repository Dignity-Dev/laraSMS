<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "I rensder from controller";
    }
    public function about(){
        return "I am from about us page of the student controller";
    }
}
