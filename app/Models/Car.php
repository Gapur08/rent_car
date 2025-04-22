<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'image', 'note', 'brand_id', 'year', 'price', 'seats', 'status', 'category_id', 'color_id', 'payment_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
