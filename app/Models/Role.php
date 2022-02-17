<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;


    public const ADMIN = 'admin';

    public const AGENT = 'agent';

    public const SALES = 'sales';

    public const STAFF = 'staff';

    public const MAINTAINER = 'maintainer';

    public const BATCH_USER = 'batch_user';



    /**
     * Indicates if all mass assignment is enabled.
     *
     * @var bool
     */
    protected static $unguarded = true;


    /**
     * Get all the users associated with the role.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany 
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
