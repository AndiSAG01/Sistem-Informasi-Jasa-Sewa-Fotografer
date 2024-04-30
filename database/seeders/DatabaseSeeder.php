<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Basic;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $file = UploadedFile::fake()->image('thumbnail.jpg');
        $filename = rand(0,99999) . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('users', $filename , 'public');
        DB::table('users')->insert([
            [
                'kd' => Str::random(5),
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'alamat' => 'alamat admin',
                'gender' => 'male',
                'phone_number'=>'123456789',
                'photo'=> $filePath,
                'email_verified_at'=> now(),
                'isAdmin' => 1
                
            ]
        ]);
        $category = [
            [
                'name' => 'Reguler'
            ],
            [
                'name' => 'Standar'
            ],
            [
                'name' => 'Premium'
            ],
            [
                'name' => 'Exclusive'
            ],
            [
                'name' => 'VIP'
            ],
            [
                'name' => 'VVIP'
            ],
        ];

        foreach($category as $ct)
        {
            Basic::create([
                'name' => $ct['name']
            ]);
        }


    }
}
