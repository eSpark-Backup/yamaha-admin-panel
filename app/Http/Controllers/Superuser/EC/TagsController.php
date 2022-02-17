<?php

namespace App\Http\Controllers\Superuser\EC;

use App\Models\Tag;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::latest()

            ->{request()->has('all') ? 'get' : 'paginate'}();

        return Inertia::render('Superuser/EC/Comodity/ProductTags/Index', \compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Superuser/EC/Comodity/ProductTags/Create');
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
            'code' => ['required', 'string'],
            'order' => ['required', 'integer']
        ]);

        $tag = Tag::create($arguments);

        return \redirect()->route('superuser.tags.index')->with('success', [
            'tag_created' => $tag->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return Inertia::render('Superuser/EC/Comodity/ProductTags/Edit', \compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $arguments = $request->validate([
            'name' => ['required', 'string'],
            'code' => ['required', 'string'],
            'order' => ['required', 'integer']
        ]);


        return \redirect()->route('superuser.tags.index')->with('success', [
            'tag_updated' => $tag->update($arguments)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        return \redirect()->route('superuser.tags.index')->with('success', [
            'tag_deleted' => $tag->delete()
        ]);
    }


    public function sort()
    {


        if (request()->has('order')) {
            // Tag::find(request('id'))->update(['order' => request('order')]);
            foreach (\request('order') as $index) {
                Tag::find($index['id'])->update(['order' => $index['order']]);
            }
        }

        $tags = Tag::select('id', 'name', 'order')->get();

        return Inertia::render('Superuser/EC/Comodity/ProductTags/Sort', \compact('tags'));
    }
}
