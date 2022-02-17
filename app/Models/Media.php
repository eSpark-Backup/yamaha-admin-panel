<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\{
    Model,
    Casts\Attribute,
    Relations\MorphTo,
    Factories\HasFactory
};

class Media extends Model
{
    use HasFactory;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<string>
     */
    protected $appends = ['url'];


    /**
     * Bootstrap the model.
     *  
     * @return void 
     * @throws \RuntimeException 
     */
    public static function boot(): void
    {
        parent::boot();

        static::observe(\App\Observers\MediaObserver::class);
    }


    /**
     * Url attribute of media path.
     * 
     * @return \Illuminate\Database\Eloquent\Casts\Attribute 
     */
    protected function url(): Attribute
    {
        return new Attribute(get: fn () => url(Storage::url($this->path)), set: fn ($value) => $value);
    }



    /**
     * Define a polymorphic, inverse one-to-one or many relationship.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo 
     */
    public function mediable(): MorphTo
    {
        return $this->morphTo();
    }
}
