<?php

namespace App\Http\Controllers\Superuser\Administration;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::with('user:id,name')->latest()->paginate();

        return Inertia::render('Superuser/Administration/Departments/Index', [
            'departments' => $departments
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
            'title' => ['required', 'string'],
            'status' => ['required', 'numeric']
        ]);

        $department = \app('auth')->user()->departments()->create($arguments);

        return \redirect()->route('superuser.departments.index')->with('success', [
            'department_created' => $department->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $arguments = $request->validate([
            'title' => ['required', 'string'],
            'status' => ['required', 'numeric']
        ]);

        return \redirect()->route('superuser.departments.index')->with('success', [
            'department_updated' => $department->update($arguments)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        return \redirect()->route('superuser.departments.index')->with('success', [
            'department_deleted' => $department->delete()
        ]);
    }
}
