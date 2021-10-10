<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class IndexController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

      return view ('admin.index');

    }


}
