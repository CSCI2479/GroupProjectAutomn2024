<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','slug', 'price', 'description', 'category_id', 'image'];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_items');

    }
    // Define One-to-Many relationship with Category

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
