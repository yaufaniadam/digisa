<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'thumbnail',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Crypt::encryptString($value)
        );
    }
}
