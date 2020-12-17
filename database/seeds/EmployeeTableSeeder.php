<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            
            $employee = new Employee;
            $employee->name = 'Emp' . $i;
            $employee->emp_code = 'Emp'.$i.' Code';
            $employee->designation = 'Emp'.$i.' Designation';
            $employee->salary = $i.'000';
            $employee->department = 'Emp'.$i.' dept';
            $employee->mobile = '1234567890';
            $employee->email = 'Emp'.$i.'@test.com';
            $employee->save();

        }
    }
}
