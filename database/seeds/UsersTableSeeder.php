<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::truncate();
        \Illuminate\Support\Facades\DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'priyanggo',
                'username'=>'komandan',
                'password'=>bcrypt('kerencuy'),
                'role'=>\App\User::ROLE_POLDA,
                'id_sector'=>0,
                'created_at'=>now(),
                'updated_at'=>now(),

            ]
        ]);
    }
}
