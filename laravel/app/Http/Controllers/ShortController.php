<?php

namespace App\Http\Controllers;

class ShortController extends Controller
{
    public function index()
    {
    	return view("shortCodes/shortCodes");
    }
}
