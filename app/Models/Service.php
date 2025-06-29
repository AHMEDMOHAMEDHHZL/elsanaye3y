<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Craftsman;
use App\Models\Order;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'craftsman_id', 'title', 'description', 'price', 'duration',
    ];

    public function craftsman(): BelongsTo
    {
        return $this->belongsTo(Craftsman::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
