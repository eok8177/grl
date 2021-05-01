<?php

namespace App\Http\Controllers\Admin;

use App\Models\PageCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class PageCategoryController extends Controller
{
    public function index()
    {
        return view('admin.page.category_index', [
            'categories' => PageCategory::all()
        ]);
    }

    public function create()
    {
        return view('admin.page.category_create', ['category' => new PageCategory]);
    }

    public function store(Request $request, PageCategory $page_category)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $page_category = $page_category->create($request->all());

        return redirect()->route('admin.page-category.index')->with('success', 'Category created');
    }

    public function show(PageCategory $page_category)
    {
        return view('admin.page.category_show', ['category' => $page_category]);
    }

    public function edit(PageCategory $page_category)
    {
        return view('admin.page.category_edit', ['category' => $page_category]);
    }

    public function update(Request $request, PageCategory $page_category)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();

        $page_category->update($data);

        if (array_key_exists('redirect', $data)) return redirect()->route('admin.dashboard')->with('success', 'Category updated');

        return redirect()->route('admin.page-category.index')->with('success', 'Category updated');
    }

    public function destroy(PageCategory $page_category)
    {
        $page_category->delete();

        return 'success';
    }
}