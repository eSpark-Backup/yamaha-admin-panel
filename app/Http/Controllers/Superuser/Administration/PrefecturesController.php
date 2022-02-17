<?php

namespace App\Http\Controllers\Superuser\Administration;

use App\Http\Controllers\Controller;
use App\Models\Prefecture;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PrefecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prefectures = Prefecture::orderBy('title')->paginate();

        return Inertia::render('Superuser/Administration/Prefectures/Index', [
            'prefectures' => $prefectures
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
        $arguments = $request->validate(['title' => ['required', 'string']]);

        $prefecture = Prefecture::create($arguments);

        return \redirect()->route('superuser.prefectures.index')
            ->with('success', ['prefecture_created' => $prefecture->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function show(Prefecture $prefecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Prefecture $prefecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prefecture $prefecture)
    {
        $arguments = $request->validate(['title' => ['required', 'string']]);

        return \redirect()->route('superuser.prefectures.index')->with('success', [
            'prefecture_updated' => $prefecture->update($arguments)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prefecture $prefecture)
    {
        return \redirect()->route('superuser.prefectures.index')->with('success', [
            'prefecture_deleted' => $prefecture->delete()
        ]);
    }
}
