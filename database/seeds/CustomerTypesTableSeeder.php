<?php

use App\CustomerTypes;
use Illuminate\Database\Seeder;

class CustomerTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CustomerTypes::truncate();

        CustomerTypes::create(
            [
                'name' => 'Citizen',
            ]
        );

        CustomerTypes::create(
            [
                'name' => 'Organisation',
            ]
        );

        CustomerTypes::create(
            [
                'name' => 'Anonymous',
            ]
        );
    }
}
