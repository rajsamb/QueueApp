<?php

use App\Customers;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Customers::truncate();

        Customers::create(
            [
                'title' =>  'Mr',
                'name' =>  'Sam',
                'surname' => 'Smith',
            ]
        );

        Customers::create(
            [
                'title' =>  '',
                'name' =>  'Waste Management Service Ltd',
                'surname' => '',
            ]
        );
    }
}
