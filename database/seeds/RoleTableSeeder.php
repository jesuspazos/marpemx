<?php

use Illuminate\Database\Seeder;
use App\Role;


class RoleTableSeeder extends Seeder
{
  public function run()
  {
    $role_employee = new Role();
    $role_employee->name = 'Empleado';
    $role_employee->description = 'Usuario Empleado';
    $role_employee->save();
    $role_manager = new Role();
    $role_manager->name = 'Administrador';
    $role_manager->description = 'Usuario Administrador';
    $role_manager->save();
  }
}
