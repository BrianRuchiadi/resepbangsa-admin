<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;


class StaticPageController extends Controller
{
    public function index(Request $request) {
        return view('pages.index');
    }
}