<?php

namespace App\Http\Controllers\Admin;

use App\Model\Page;
use App\Model\PageCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $pages = Page::orderBy('order', 'asc');

        $category = $request->input('category', false);
        if ($category) {
            $pages->where('category_id', $category);
        }

        return view('admin.page.index', [
            'page' => $pages->get(),
            'categories' => PageCategory::categories(),
        ]);
    }

    public function create()
    {
        return view('admin.page.create', ['page' => new Page]);
    }

    public function store(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $page = $page->create($request->all());

        return redirect()->route('admin.page.index')->with('success', 'Item created');
    }

    public function show(Page $page)
    {
        return view('admin.page.show', ['page' => $page]);
    }

    public function edit(Page $page)
    {
        return view('admin.page.edit', ['page' => $page]);
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();

        $page->update($data);

        if (array_key_exists('redirect', $data)) return redirect()->route('admin.dashboard')->with('success', 'Item updated');

        return redirect()->route('admin.page.index')->with('success', 'Item updated');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return 'success';
    }
}
