<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers';

    protected $guarded = ['id','created_at','updated_at'];

    public function queue()
    {
        return $this->hasMany(CustomerQueue::class);
    }
}
