<?php

namespace App\Http\Controllers\Superuser\Administration;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::orderBy('title')->paginate();

        return Inertia::render('Superuser/Administration/Groups/Index', [
            'groups' => $groups
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

        $group = Group::create($arguments);

        return \redirect()->route('superuser.groups.index')->with('success', [
            'group_created' => $group->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $arguments = $request->validate([
            'title' => ['required', 'string'],
            'status' => ['required', 'numeric']
        ]);

        return \redirect()->route('superuser.groups.index')->with('success', [
            'group_updated' => $group->update($arguments)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        return \redirect()->route('superuser.groups.index')->with('success', [
            'group_deleted' => $group->delete()
        ]);
    }
}
