<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CustomerQueue extends Model
{
    protected $table = 'customer_queues';

    protected $guarded = ['id','created_at','updated_at'];

    public function customers()
    {
        return $this->belongsTo(Customers::class);
    }

    public function serviceTypes()
    {
        return $this->belongsTo(ServiceTypes::class);
    }

    public function customerTypes()
    {
        return $this->belongsTo(CustomerTypes::class);
    }

    /**
     * Set customerd id attribute to null if not provided.
     *
     * @param  string  $value
     * @return string
     */
    public function setCustomersIdAttribute($value)
    {
        $value = ($value) ? : NULL;
        $this->attributes['customers_id'] = $value;
    }

    /**
     * Set queued at attribute to current date if not provided.
     *
     * @param  string  $value
     * @return string
     */
    public function setQueuedAtAttribute($value)
    {
        $value = ($value) ? : Carbon::now('Europe/London');
        $this->attributes['queued_at'] = $value;
    }
}
