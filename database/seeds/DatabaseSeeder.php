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
        App\Role::insert([
            ['name' => 'Kasie Keuangan'],
            ['name' => 'PUMK'],
            ['name' => 'PR 2'],
        ]);
        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
