<?php

use Illuminate\Database\Seeder;
use App\Employees;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employees::class, 50) -> create();
    }
}
