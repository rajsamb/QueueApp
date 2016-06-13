<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceTypes extends Model
{
    protected $table = 'service_types';

    protected $guarded = ['id','created_at','updated_at'];

    public function queue()
    {
        return $this->hasMany(CustomerQueue::class);
    }
}
