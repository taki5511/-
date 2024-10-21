<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    return view('categories.index')->with(['posts' => $category->getByCategory()]);
}
