<?php

use Carbon\Carbon;
use App\CustomerQueue;
use Illuminate\Database\Seeder;

class CustomerQueuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CustomerQueue::truncate();

        CustomerQueue::create(
            [
                'customers_id' => 1,
                'customer_types_id' => 1,
                'service_types_id' => 2,
                'queued_at' => Carbon::now('Europe/London')->subMinute(5)
            ]
        );

        CustomerQueue::create(
            [
                'customers_id' => null,
                'customer_types_id' => 3,
                'service_types_id' => 2,
                'queued_at' => Carbon::now('Europe/London')->subMinute(2)
            ]
        );

        CustomerQueue::create(
            [
                'customers_id' => 2,
                'customer_types_id' => 2,
                'service_types_id' => 4,
                'queued_at' => Carbon::now('Europe/London')
            ]
        );
    }
}
