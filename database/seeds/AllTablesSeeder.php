<?php

use Illuminate\Database\Seeder;
use App\Account;
class AllTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->delete();
        $json = File::get("database/data_seeder/account.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
        	Account::create(array(
        		'name' => $obj->name
        	));
        }
    }
}
