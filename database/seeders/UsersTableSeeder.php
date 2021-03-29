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

        $user = User::query()->find(1);
        $user->name = 'fengniancong';
        $user->email = 'fengniancong@163.com';
        $user->password = bcrypt('glg7850782');
        $user->save();

        $user = User::query()->find(2);
        $user->name = 'honglang';
        $user->email = 'honglang@163.com';
        $user->password = bcrypt('glg7850782');
        $user->save();

    }
}
