<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Sukien;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Sukien::class,function (Faker $faker){
    return[
        'sukien_name'=>$faker->jobTitle,
        'noidung'=>$faker->jobTitle,
        'sanpham'=>$faker->jobTitle,
        'thuonghieu'=>$faker->jobTitle,
        'thoigian'=>$faker->date('Y-m-d',$max='now'),

    ];
});

$factory->define(App\Chiendich::class,function (Faker $faker){
    return[
        'chiendich_name'=>$faker->jobTitle,
        'sukien_id'=>$faker->randomFloat(0,1,20),
        'noidung'=>$faker->jobTitle,
        'hinh'=>$faker->image(),
        'ds_ungho'=>$faker->numberBetween(1),
        'ngayhethan'=>$faker->date('Y-m-d',$max='now'),

    ];
});

$factory->define(App\Tintuc::class,function (Faker $faker){
    return[
        'tintuc_name'=>$faker->jobTitle,
        'chiendich_id'=>$faker->randomFloat(0,1,50),
        'tomtat'=>$faker->jobTitle,
        'noidung'=>$faker->jobTitle,
        'hinh'=>$faker->image(),
        'noibat'=>$faker->numberBetween(1),
        'soluotxem'=>$faker->numberBetween(1),

    ];
});

$factory->define(App\Binhluan::class,function (Faker $faker){
    return[
        'user1_id'=>$faker->randomFloat(0,1,10),
        'tintuc_id'=>$faker->randomFloat(0,1,50),
        'noidung'=>$faker->jobTitle,


    ];
});

$factory->define(App\User1::class,function (Faker $faker){
    return[
        'user1_name'=>$faker->jobTitle,
        'email'=>$faker->email,
        'level'=>$faker->numberBetween(1),
        'password' =>$faker->password(), // password

    ];
});
$factory->define(App\Ungho::class,function (Faker $faker){
    return[
        'ungho_name'=>$faker->jobTitle,
        'chiendich_id'=>$faker->randomFloat(0,1,50),
        'sotien'=>$faker->numberBetween(),
        'loinhan' =>$faker->jobTitle,
        'hoten'=>$faker->jobTitle,
        'dienthoai'=>$faker->numberBetween(),
        'email'=>$faker->email,

    ];
});

