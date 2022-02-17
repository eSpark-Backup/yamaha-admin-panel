<?php

namespace App\Models;

use App\Models\ProductModel;
use App\Observers\ProductObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;



    /**
     * Indicates if all mass assignment is enabled.
     *
     * @var bool
     */
    protected static $unguarded = true;


    protected $with = ['metadata'];


    protected $appends = ['meta'];


    public static function boot()
    {
        parent::boot();

        static::observe(ProductObserver::class);
    }



    public function meta(): Attribute
    {
        return new Attribute(fn () => $this->metadata->mapWithKeys(fn ($meta) => (object)[$meta->key => $meta->value]));
    }


    public function model()
    {
        return $this->belongsTo(ProductModel::class, 'product_model_id');
    }


    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }



    public function metadata(): MorphMany
    {
        return $this->morphMany(Meta::class, 'subject');
    }


    /**
     * Get product tags.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany 
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }


    public function media()
    {
        return $this->morphMany(Media::class, 'mediable')->orderBy('order');
    }
}
