<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $u = new User();
        $u->name = "Cesar";
        $u->email = "cesar.torregonzalez@gmail.com";
        $u->password = bcrypt("password");
        $u->save();

        $this->command->info('Tabla de usuarios inicializada con datos');
    }
}
