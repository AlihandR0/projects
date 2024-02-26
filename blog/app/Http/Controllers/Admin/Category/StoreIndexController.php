<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use GuzzleHttp\Psr7\Request;

class StoreIndexController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Category::FirstOrCreate($data);
        return redirect()->route('admin.category.index');
    }
}
