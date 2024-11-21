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

        // Need for pivot table
}
