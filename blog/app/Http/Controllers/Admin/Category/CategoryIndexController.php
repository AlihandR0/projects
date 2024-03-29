<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryIndexController extends Controller
{
    public function __invoke(): string
    {
        $categories = Category::all();
        return view('admin.categories.index' , compact('categories'));
    }
}
