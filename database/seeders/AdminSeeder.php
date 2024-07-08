<?php
namespace Database\Seeders;
namespace App\Models\adminlog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        AdminSeeder::table('adminlog')->insert([
            'name' => 'Admin',
            'email' =>  'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        
        
    }
}
