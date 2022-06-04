<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $admin= new \App\Models\Administrador();
        $admin->usuario='ADMIN';
        $admin->nombre='Jeronimo Gomez';
        $admin->telefono='9192412544';
        $admin->email='gomezjero98@gmail.com';
        $admin->pass=Hash::make('admin.deportiva');
        $admin->save();
    }
}
