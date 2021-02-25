<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleCategoryController extends Controller
{
    public function index()
    {
        return view('single_category');
    }
}
