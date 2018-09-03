<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('account')->delete();
        $json = File::get("database/data_seeder/user.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
        	User::create(array(
        		'name' => $obj->name,
        		'email' => $obj->email,
        		'password' => $obj->password
        	));
        }
    }
}
