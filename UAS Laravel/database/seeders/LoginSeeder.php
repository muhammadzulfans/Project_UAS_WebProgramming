<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("login")->insert([
            "nama"=>"Ani",
            "nomor_induk"=>"1000",
            "alamat"=>"Bantul",
            "created_at"=>date("Y-m-d H:i:s")
        ]);
        DB::table("login")->insert([
            "nama"=>"Ali",
            "nomor_induk"=>"1001",
            "alamat"=>"Sleman",
            "created_at"=>date("Y-m-d H:i:s")
        ]);
        DB::table("login")->insert([
            "nama"=>"Aldi",
            "nomor_induk"=>"1002",
            "alamat"=>"GunungKidul",
            "created_at"=>date("Y-m-d H:i:s")
        ]);
    }
}
