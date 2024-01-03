<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()
            ->count(25)
            ->hasInvoices(10)
            ->create();
        Customer::factory()
            ->count(100)
            ->hasInvoices(30)
            ->create();
        Customer::factory()
            ->count(100)
            ->hasInvoices(50)
            ->create();
        Customer::factory()
            ->count(20)
            ->hasInvoices(3)
            ->create();
        Customer::factory()
            ->count(200)
            ->hasInvoices(1)
            ->create();
        Customer::factory()
            ->count(5)
            ->create();
    }
}
