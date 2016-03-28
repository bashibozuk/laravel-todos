<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

use App\Http\Requests;

class TodosController extends Controller
{
    //
    public function index()
    {
        return Todo::all();
    }

    public function create()
    {

    }

    public function save()
    {

    }
}
