<?php

namespace App\Http\Controllers\Superuser\Administration;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Models\{Tenant, Prefecture, Group, Department};
use App\Http\Requests\Tenant\{Create as CreateTenant, Update as UpdateTenant};

class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenants = Tenant::with(['group', 'tenant', 'department', 'prefecture'])->latest()->paginate();


        return Inertia::render('Superuser/Administration/Tenants/Index', [
            'tenants' => $tenants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $groups = Group::all();

        $tenants = Tenant::all();

        $departments = Department::all();

        $prefectures = Prefecture::all();

        return Inertia::render('Superuser/Administration/Tenants/Create', [
            'groups' => $groups,
            'tenants' => $tenants,
            'departments' => $departments,
            'prefectures' => $prefectures,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTenant $request)
    {
        $arguments = $request->validated();

        $tenant = Tenant::create($arguments);

        return \redirect()->route('superuser.tenants.index')
            ->with('success', ['tenant_created' => $tenant->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function show(Tenant $tenant)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenant $tenant)
    {
        $groups = Group::all();

        $tenants = Tenant::all();

        $prefectures = Prefecture::all();

        $departments = Department::all();

        return Inertia::render('Superuser/Administration/Tenants/Edit', [
            'tenant' => $tenant,
            'groups' => $groups,
            'tenants' => $tenants,
            'departments' => $departments,
            'prefectures' => $prefectures,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTenant $request, Tenant $tenant)
    {
        $arguments = $request->validated();

        return \back()->with('success', ['tenant_updated' => $tenant->update($arguments)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenant $tenant)
    {
        return \redirect()->route('superuser.tenants.index')
            ->with('success', ['tenant_deleted' => $tenant->delete()]);
    }
}
