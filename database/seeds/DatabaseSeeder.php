<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CustomersTableSeeder');
        $this->command->info('Customers table seeded!');

        $this->call('CustomerTypesTableSeeder');
        $this->command->info('Customer Types table seeded!');

        $this->call('ServiceTypesTableSeeder');
        $this->command->info('Service Types table seeded!');

        $this->call('CustomerQueuesTableSeeder');
        $this->command->info('Customer Queues table seeded!');
    }
}
