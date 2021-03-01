<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->count(2)->create();

        $user = User::find(1);
        $user->name = 'fengniancong';
        $user->email = 'fengniancong@163.com';
        $user->save();

        $user = User::find(2);
        $user->name = 'honglang';
        $user->email = 'honglang@163.com';
        $user->save();
    }
}
