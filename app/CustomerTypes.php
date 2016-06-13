<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerTypes extends Model
{
    protected $table = 'customer_types';

    protected $guarded = ['id','created_at','updated_at'];

    /**
     * A queue can have multiple instance of a
     * customer type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function queue()
    {
        return $this->hasMany(CustomerQueue::class);
    }
}
