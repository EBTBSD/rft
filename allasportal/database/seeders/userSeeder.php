<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            // $table->string('name');
            // $table->integer('age');
            // $table->string('sex');
            // $table->string('email')->unique();
            // $table->string('salary');
            // $table->string('permission');
            // $table->string('password');
            // $table->timestamps();

        DB::table('users')->insert([
            [//id name age sex email salary permission password
                'id' => '1',
                'name' => 'Allas Admin',
                'age' => '30',
                'sex' => 'Other',
                'salary' => '0',
                'email' => 'admin@allas.hu',
                'permission' => 'admin',
                'password' => Hash::make('admin')
            ],
             [//id name age sex email salary permission password
                'id' => '2',
                'name' => 'Munka Vallalo',
                'age' => '30',
                'sex' => 'Other',
                'salary' => '0',
                'email' => 'munka@vallalo.hu',
                'permission' => 'munkavallalo',
                'password' => Hash::make('munkavallalo')
             ],
             [//id name age sex email salary permission password
                'id' => '3',
                'name' => 'Munka Ado',
                'age' => '30',
                'sex' => 'Other',
                'salary' => '5000',
                'email' => 'munka@ado.hu',
                'permission' => 'munkaado',
                'password' => Hash::make('munkaado')
             ],
        ]);

        DB::table('sex')->insert([
            [//id sex
                'id' => '1',
                'sex' => 'Female'
            ],
            [//id sex
                'id' => '2',
                'sex' => 'Male'
            ],
            [//id sex
                'id' => '3',
                'sex' => 'Other'
            ],
        ]);
    }
}
