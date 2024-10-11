<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // $table->id();
    //         $table->string('name');
    //         $table->string('email')->unique();
    //         $table->string('password');
    //         $table->string(column: 'telp')->nullable();
    //         $table->enum('role',['admin', 'user'])->default('user');
    //         $table->rememberToken();
    //         $table->timestamps();
    public function run(): void
    {
        $user = new User();
        $user->name = 'Admin 124';
        $user->email = 'admin123@gmail.com';
        $user->password = Hash::make('admin123');
        $user->telp = '12345678';
        $user->role = 'admin';
        $user->save();

    }
}
