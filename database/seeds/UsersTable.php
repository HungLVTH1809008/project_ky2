<?php

use Illuminate\Database\Seeder;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Sukien::class,20)->create();
        factory(App\Chiendich::class,50)->create();
        factory(App\Tintuc::class,50)->create();
        factory(App\Binhluan::class,50)->create();
        factory(App\User1::class,10)->create();
        factory(App\Ungho::class,50)->create();

    }
}
