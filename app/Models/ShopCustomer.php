<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShopCustomer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'status',
        'notes',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(ShopOrder::class);
    }
}
