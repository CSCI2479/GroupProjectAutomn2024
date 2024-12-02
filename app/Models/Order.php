<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'Orders';

    // Order belongs to one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Order has many products
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id')
                    ->withPivot('quantity', 'price') // Add pivot fields if necessary
                    ->withTimestamps();
    }
    
        protected $fillable = ['user_id', 'total', 'status'];
    
        public function isCompleted()
        {
            return $this->status === 'completed';
        }
    }


