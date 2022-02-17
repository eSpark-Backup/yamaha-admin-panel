<?php

namespace App\Http\Controllers\Superuser\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ManufacturersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Manufacturer $manufacturer)
    {
        $manufacturers = $manufacturer
            ->latest()

            ->{request()->has('all') ? 'get' : 'paginate'}();

        return Inertia::render('Superuser/Ecommerce/Manufacturers/Index', [
            'manufacturers' => $manufacturers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arguments = $request->validate([
            'name' => ['required', 'string'],
            'short_name' => ['required', 'string'],
            'status' => ['nullable', 'integer']
        ]);

        $manufacturer = Manufacturer::create($arguments);

        return \redirect()->route('superuser.manufacturers.index')->with('success', [
            'manufacturer_created' => $manufacturer->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacturer $manufacturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacturer $manufacturer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manufacturer $manufacturer)
    {

        $arguments = $request->validate([
            'name' => ['required', 'string'],
            'short_name' => ['required', 'string'],
            'status' => ['nullable', 'integer']
        ]);


        return \redirect()->route('superuser.manufacturers.index')->with('success', [
            'manufacturer_updated' => $manufacturer->update($arguments)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacturer $manufacturer)
    {
        return \redirect()->route('superuser.manufacturers.index')->with('success', [
            'manufacturer_deleted' => $manufacturer->delete()
        ]);
    }
}
