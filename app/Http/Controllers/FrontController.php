<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Page;
use App\Models\PageCategory;
use App\Models\Slide;

class FrontController extends Controller
{
    public function home()
    {
        $slides = Slide::where('published', 1)
            ->orderBy('order', 'asc')
            ->get();

        $blog = Page::where('published', 1)
            ->where('category_id', 3) //Поради лікарів
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view('front.home', [
            'slides' => $slides,
            'blog' => $blog
        ]);
    }

    public function about()
    {
        $pages = Page::with('category')
            ->where('published', 1)
            ->limit(3)
            ->orderBy('id', 'desc')
            ->get();

        $doctors = Doctor::where('published', 1)
            ->orderBy('order', 'asc')
            ->get();

        return view('front.about', [
            'pages' => $pages,
            'doctors' => $doctors
        ]);
    }

    public function pages($slug)
    {
        $category = PageCategory::where('slug', $slug)->firstOrFail();

        $categories = PageCategory::where('published', 1)
            ->orderBy('id', 'asc')
            ->get();

        return view('front.pages', [
            'category' => $category,
            'categories' => $categories
        ]);
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        $categories = PageCategory::where('published', 1)
            ->orderBy('id', 'asc')
            ->get();

        return view('front.page', [
            'page' => $page,
            'categories' => $categories
        ]);
    }

}
