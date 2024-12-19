<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate();
        return Inertia::render('Categories/Index', [
            'categories' => $categories,
        ]);
    }
    // other methods to follow
}
