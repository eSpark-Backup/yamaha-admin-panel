<?php

namespace App\Http\Controllers\Superuser\Support;

use Inertia\Inertia;
use App\Models\{Tenant, Inquiry};
use App\Http\Controllers\Controller;
use App\Http\Requests\Inquiry\{Create as CreateInquiry, Update as UpdateInquiry};

class InquiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inquiries = Inquiry::latest()->with('user:id,name', 'tenant:id,name')->paginate();

        return Inertia::render('Superuser/Support/Inquiries/Index', [
            'inquiries' => $inquiries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tenants = Tenant::all(['id', 'name']);

        return Inertia::render('Superuser/Support/Inquiries/Create', [
            'tenants' => $tenants,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Inquiry\Create  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInquiry $request)
    {
        $arguments = \array_merge($request->validated(), ['user_id' => \auth()->id()]);

        $inquiry = Inquiry::create($arguments);

        return \redirect()->route('superuser.inquiries.show', $inquiry)
            ->with('success', ['inquiry_created' => $inquiry->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiry $inquiry)
    {
        return Inertia::render('Superuser/Support/Inquiries/Show', [
            'inquiry' => $inquiry
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiry $inquiry)
    {
        $tenants = Tenant::all(['id', 'name']);

        return Inertia::render('Superuser/Support/Inquiries/Edit', [
            'tenants' => $tenants,
            'inquiry' => $inquiry
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Inquiry\Update  $request
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInquiry $request, Inquiry $inquiry)
    {
        $arguments = $request->validated();

        return \redirect()->route('superuser.inquiries.edit', $inquiry)
            ->with('success', ['inquiry_updated' => $inquiry->update($arguments)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiry $inquiry)
    {
        return \redirect()->route('superuser.inquiries.index')
            ->with('success', ['inquiry_deleted' => $inquiry->delete()]);
    }
}
