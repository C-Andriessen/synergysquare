<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate(['id' => Role::ADMIN, 'name' => 'ADMIN']);
        Role::updateOrCreate(['id' => Role::INVESTOR, 'name' => 'INVESTOR']);
        Role::updateOrCreate(['id' => Role::STARTUP, 'name' => 'STARTUP']);
        Role::updateOrCreate(['id' => Role::HOMEOWNER, 'name' => 'HOMEOWNER']);
    }
}
