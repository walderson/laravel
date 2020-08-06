<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Chuck Norris', 'email'=>'bradock@contra.mil', 'password'=>bcrypt('teste123')]);
        User::create(['name'=>'John Rambo', 'email'=>'john@rambo.com', 'password'=>bcrypt('teste123')]);
    }
}
