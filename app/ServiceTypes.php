<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceTypes extends Model
{
    protected $table = 'service_types';

    protected $guarded = ['id','created_at','updated_at'];

    /**
     * A queue can have multiple instance of a
     * service type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function queue()
    {
        return $this->hasMany(CustomerQueue::class);
    }
}
