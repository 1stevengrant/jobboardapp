<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $tables = ['users', 'jobs'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->truncate();
        DB::table('jobs')->truncate();
        DB::table('profiles')->truncate();

        $this->call(UsersTableSeeder::class);
        $this->call(JobsTableSeeder::class);
    }
}
