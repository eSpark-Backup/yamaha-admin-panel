<?php

namespace App\Models;

use App\Features\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasProfilePhoto, TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'date_of_birth',
        'phone',
        'gender',
        'phone',
        'fax',
        'address',
        'city',
        'zip',
        'language',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'role_id' => 'integer'
    ];




    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
        'two_factor_enabled',
    ];


    protected $with = ['cart'];


    public function getTwoFactorEnabledAttribute()
    {
        return $this->hasEnabledTwoFactorAuthentication();
    }

    public function cart(): HasOne
    {
        return $this->hasOne(Cart::class);
    }

    /**
     * Get the user role.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne 
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }


    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }
}
