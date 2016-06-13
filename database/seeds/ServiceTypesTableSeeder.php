<?php

use App\ServiceTypes;
use Illuminate\Database\Seeder;

class ServiceTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ServiceTypes::truncate();

        ServiceTypes::create(
            [
                'name' => 'Housing',
            ]
        );

        ServiceTypes::create(
            [
                'name' => 'Benefits',
            ]
        );

        ServiceTypes::create(
            [
                'name' => 'Council Tax',
            ]
        );

        ServiceTypes::create(
            [
                'name' => 'Fly-tipping',
            ]
        );

        ServiceTypes::create(
            [
                'name' => 'Missed Bin',
            ]
        );
    }
}
