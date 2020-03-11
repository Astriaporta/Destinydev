<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Services::class);
        $this->call(Skills::class);
        $this->call(Socials::class);
    }
}
