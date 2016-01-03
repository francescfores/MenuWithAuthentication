<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->seedUserTable();

        Model::reguard();
    }

    private function seedUserTable()
    {
        $user = new \App\User();
        $user->name = "francecsc fores";
        $user->email = "francescfores@iesebre.com";
        $user->password = bcrypt(env('PASSWORD_ESTIMAT', '1234'));
        $user->save();
    }
}
