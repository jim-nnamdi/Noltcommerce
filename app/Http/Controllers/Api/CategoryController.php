<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    public function getAllCategories()
    {
        return CategoryResource::collection(Category::orderBy("created_at", "desc")->paginate(6));
    }
    public function show(Category $category)
    {
        $single_category = Category::findOrFail($category);
        return new CategoryResource($single_category);
    }
    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return new CategoryResource($category);
    }
    public function destroy(Request $request, Category $category)
    {
        $category->delete($request->all());
        return CategoryResource::collection($category);
    }
}
