<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;


    public const TYPE_PRODUCT = 1;

    public const TYPE_ORDER = 2;

    public const TYPE_DELIVERY = 3;

    public const TYPE_OTHER = 4;

    public const STATUS_UNANSWERED = 1;

    public const STATUS_ANSWERED = 2;

    public const STATUS_SUPPORTED = 3;


    /**
     * Indicates if all mass assignment is enabled.
     *
     * @var bool
     */
    protected static $unguarded = true;


    protected $appends = ['statuses', 'types'];



    public function getStatusesAttribute()
    {
        return [
            self::STATUS_UNANSWERED => "Un-Answered",
            self::STATUS_ANSWERED => "Answered",
            self::STATUS_SUPPORTED => "Supported",
        ];
    }


    public function getTypesAttribute()
    {
        return [
            self::TYPE_PRODUCT => "Product",
            self::TYPE_ORDER => "Order",
            self::TYPE_DELIVERY => "Delivery",
            self::TYPE_OTHER => "Other"
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
