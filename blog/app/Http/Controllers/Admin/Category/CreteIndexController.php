<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;

class CreteIndexController extends Controller
{
    public function __invoke(): string
    {
        return view('admin.categories.crete');
    }
}
