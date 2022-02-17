<?php

namespace Tests\Feature;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function itCanListUsers()
    {
        $role = Role::factory()->create(['title' => 'Admin', 'slug' => 'admin']);

        $user = User::factory()->create(['role_id' => $role->id]);

        $this->actingAs($user)->get(route('admin.users.index'))

            ->assertSee($user->name);
    }
}
