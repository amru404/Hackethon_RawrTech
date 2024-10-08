<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            //admin
            [
                'nama' =>  'Paket Argowisata',
                'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea amet rem consequatur reprehenderit cumque repudiandae nam facere blanditiis asperiores totam?',
                'fitur' => 'Fullday, welcome drink, 1x launch',
                'latitude' => '-6.5742361925400985',
                'longtitude' => '106.63178521287578',
                'nomor_telepon' => '+628457284992',
                'harga' => 150000,
                'slug' => 'paket-argowisata',
            ],

            [
                'nama' =>  'Paket Rafting',
                'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea amet rem consequatur reprehenderit cumque repudiandae nam facere blanditiis asperiores totam?',
                'fitur' => 'Fullday, welcome drink, 2x launch, rafting',
                'latitude' => '-6.5742361925400983',
                'longtitude' => '106.63178521287573',
                'nomor_telepon' => '+628457284992',
                'harga' => 350000,
                'slug' => 'paket-rafting',
            ],

            [
                'nama' =>  'Paket Argowisata',
                'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea amet rem consequatur reprehenderit cumque repudiandae nam facere blanditiis asperiores totam?',
                'fitur' => 'Fullday, welcome drink, 1x launch, ekraf',
                'latitude' => '-6.5742361925400982',
                'longtitude' => '106.63178521287571',
                'nomor_telepon' => '+628457284992',
                'harga' => 250000,
                'slug' => 'paket-argowisata',
            ],

        ]); 
    }
}
