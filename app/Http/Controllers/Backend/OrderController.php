<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        return view('backend.order.index');
    }

    public function create()
    {
        return view('backend.order.create');
    }
}
