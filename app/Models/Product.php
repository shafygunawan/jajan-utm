<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'price',
        'rating',
        'status',
        'photo',
        'merchant_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'price' => 'integer',
        'rating' => 'float',
        'merchant_id' => 'integer',
    ];

    public $timestamps = false;

    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}