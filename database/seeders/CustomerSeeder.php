<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer;
        $customer->nama = "Bayu";
        $customer->email = "bayuyahya@mail.com";
        $customer->phone = "085239166971";
        $customer->address = "lombok tengah"; 
        $customer->save();
}

}
