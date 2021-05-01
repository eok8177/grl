<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        return view('admin.doctor.index', [
            'page' => Doctor::orderBy('order')->get()
        ]);
    }

    public function create()
    {
        return view('admin.doctor.create', ['page' => new Doctor]);
    }

    public function store(Request $request, Doctor $doctor)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $doctor = $doctor->create($request->all());

        return redirect()->route('admin.doctor.index')->with('success', 'Item created');
    }

    public function show(Doctor $doctor)
    {
        return view('admin.doctor.show', ['page' => $doctor]);
    }

    public function edit(Doctor $doctor)
    {
        return view('admin.doctor.edit', ['page' => $doctor]);
    }

    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $data = $request->all();

        $doctor->update($data);

        if (array_key_exists('redirect', $data)) return redirect()->route('admin.dashboard')->with('success', 'Item updated');

        return redirect()->route('admin.doctor.index')->with('success', 'Item updated');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return 'success';
    }
}
