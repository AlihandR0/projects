<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainIndexController extends Controller
{
    public function __invoke(): string
    {
        return view('main.index');
    }
}
