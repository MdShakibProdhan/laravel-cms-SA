<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        // $services = [];
        return view('serviceView.index', compact('services'));
        // return view('serviceView.customIndex', compact('services'));
        // return view()->with($services, ['serviceView.index', 'dashboard']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('serviceView.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $service = new Service($validatedData);

        // if ($request->hasFile('image')) {
        //     $service->image = $request->file('image')->store('public/images');
        // }
        // .............................................................


        // if ($request->hasFile('image')) {
        //     $service->image = $request->file('image')->store('images/');
        // }

        // .............................................................
        $formFileName = "image";
        $fileFinalName_ar = "";

        if ($request->image != "") {
            if ($request->$formFileName != "") {
                $fileFinalName_ar = time() . rand(
                    1111,
                    9999
                ) . '.' . $request->file($formFileName)->getClientOriginalName();
                $path = 'images/';
                $request->file($formFileName)->move($path, $fileFinalName_ar);
                $service->image = $fileFinalName_ar;
            }
        }
        $service->save();
        return redirect()->route('service.index')->with('success', 'Service created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        return view('serviceView.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $service = Service::find($id);
        $service->fill($validatedData);

        // if ($request->hasFile('image')) {
        //     Storage::delete($service->image);
        //     $service->image = $request->file('image')->store('public/images');
        // }

        $formFileName = "image";
        $fileFinalName_ar = "";

        if ($request->image != "") {
            if ($request->$formFileName != "") {
                $fileFinalName_ar = time() . rand(
                    1111,
                    9999
                ) . '.' . $request->file($formFileName)->getClientOriginalName();
                $path = 'images/';
                $request->file($formFileName)->move($path, $fileFinalName_ar);
                $service->image = $fileFinalName_ar;
            }
        }

        $service->save();

        return redirect()->route('service.index')->with('success', 'Service updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        Storage::delete($service->image);
        $service->delete();

        return redirect()->route('service.index')->with('success', 'Service deleted successfully!');
    }
}
