<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'ismael',
                'surname' => 'ponce',
                'email' => 'ismaelponceon@gmail.com',
                'password' => bcrypt('isma123'),
                'admin' => true
            ]
        );

        DB::table('users')->insert(
            [
                'name' => 'maria',
                'surname' => 'unapaixa',
                'email' => 'maria@gmail.com',
                'password' => bcrypt('maria123'),
                'admin' => false
            ]
        );
    }
}
