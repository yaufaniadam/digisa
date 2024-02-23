<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'thumbnail',
        'description',
        'file',
        'price',
        'group_id',
    ];

    protected $hidden = [
        'file'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function transactionItems()
    {
        return $this->hasMany(TransactionItem::class);
    }

    public function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Crypt::encryptString($value)
        );
    }

    public function file(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Crypt::encryptString($value)
        );
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
