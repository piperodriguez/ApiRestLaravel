<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan Felipe Rodríguez Vargas',
            'email' => 'vargasjuan367@gmail.com',
            'password' => bcrypt('solati123'),
            
        ]);
    }
}
