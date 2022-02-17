<?php

namespace App\Http\Controllers\Superuser\Ecommerce;

use Inertia\Inertia;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductModel $productModel)
    {
        $models = $productModel

            ->latest()

            ->{request()->has('all') ? 'get' : 'paginate'}();

        return Inertia::render("Superuser/Ecommerce/Models/Index", [
            'models' => $models
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
        $arguments = $request->validate(['name' => ['required', 'string'], 'status' => ['nullable', 'integer']]);

        $productModel = ProductModel::create($arguments);

        return \redirect()->route('superuser.models.index')->with('success', [
            'model_created' => $productModel->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function show(ProductModel $productModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductModel $productModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductModel $model)
    {
        $arguments = $request->validate(['name' => ['required', 'string'], 'status' => ['nullable', 'integer']]);

        return \redirect()->route('superuser.models.index')->with('success', [
            'model_updated' => $model->update($arguments)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductModel $productModel)
    {
        return \redirect()->route('superuser.models.index')->with('success', [
            'model_deleted' => $productModel->delete()
        ]);
    }
}
