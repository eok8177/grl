<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    public function index()
    {
        return view('admin.slide.index', [
            'page' => Slide::orderBy('order')->get()
        ]);
    }

    public function create()
    {
        return view('admin.slide.create', ['page' => new Slide]);
    }

    public function store(Request $request, Slide $slide)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $slide = $slide->create($request->all());

        return redirect()->route('admin.slide.index')->with('success', 'Item created');
    }

    public function show(Slide $slide)
    {
        return view('admin.slide.show', ['page' => $slide]);
    }

    public function edit(Slide $slide)
    {
        return view('admin.slide.edit', ['page' => $slide]);
    }

    public function update(Request $request, Slide $slide)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();

        $slide->update($data);

        if (array_key_exists('redirect', $data)) return redirect()->route('admin.dashboard')->with('success', 'Item updated');

        return redirect()->route('admin.slide.index')->with('success', 'Item updated');
    }

    public function destroy(Slide $slide)
    {
        $slide->delete();

        return 'success';
    }
}
