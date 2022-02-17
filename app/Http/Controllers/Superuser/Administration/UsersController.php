<?php

namespace App\Http\Controllers\Superuser\Administration;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Models\{Prefecture, Role, Tenant, User};
use App\Http\Requests\User\{Create as CreateUser, Update as UpdateUser};

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::paginate();

        $users->load(['role', 'prefecture', 'tenant:id,name']);

        return Inertia::render('Superuser/Administration/Users/Index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        $tenants = Tenant::all(['id', 'name']);

        $prefectures = Prefecture::all();

        return Inertia::render('Superuser/Administration/Users/Create', [
            'roles' => $roles,
            'tenants' => $tenants,
            'prefectures' => $prefectures,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUser $request)
    {
        $arguments = $request->validated();


        $user = User::create(\array_merge($arguments, ['password' => \bcrypt('password')]));


        return redirect()->route('superuser.users.index')->with('success', ['user_created' => $user->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
       
       
            return Inertia::render('Superuser/Administration/Users/Show');
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        $roles = Role::all();

        $tenants = Tenant::all(['id', 'name']);

        $prefectures = Prefecture::all();

        $user->load('prefecture', 'tenant:id,name');

        return Inertia::render('Superuser/Administration/Users/Edit', [
            'user' => $user,
            'roles' => $roles,
            'tenants' => $tenants,
            'prefectures' => $prefectures,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, User $user)
    {
        $arguments = $request->validated();

        return redirect()->route('superuser.users.edit', $user)
            ->with('success', ['user_updated' => $user->update($arguments)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return redirect()->route('superuser.users.index')
            ->with('success', ['user_deleted' => $user->delete()]);
    }
}
