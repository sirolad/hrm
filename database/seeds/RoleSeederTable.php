<?php
use Sirolad\Role;
use Illuminate\Database\Seeder;

class RoleSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = new Role();
        $userRole->name = "Admin";
        $userRole->description = "An Admin Role";
        $userRole->save();

        $customerServiceRole = new Role();
        $customerServiceRole->name = "Employee";
        $customerServiceRole->description = "An employee Role";
        $customerServiceRole->save();

        $adminRole = new Role();
        $adminRole->name = "Manager";
        $adminRole->description = "A Manager Role";
        $adminRole->save();
    }
}
