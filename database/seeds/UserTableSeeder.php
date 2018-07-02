<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class, 10)->create()->each(function($u) {
        $u->design_jobs()->save(factory(App\Design_job::class)->make());
      });
    }
}
