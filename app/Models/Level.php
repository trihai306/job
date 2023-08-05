<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'image',
    ];

    /**
     * Get the users for the level.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the products for the level.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
