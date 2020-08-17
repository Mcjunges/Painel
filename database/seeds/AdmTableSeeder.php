<?php

use Illuminate\Database\Seeder;
use App\User;

class AdmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user = User::create([
            'role_id'   =>1,
            'name'      =>"Adm - Marcelo",
            'email'     =>"contato@hipertv.me",
            'password'  =>bcrypt("11111111"),
        ]);
    }
}