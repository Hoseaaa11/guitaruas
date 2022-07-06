<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Guitar Electric',
                'slug' => 'Gretsch',
                'price' => 800,
                // 'created_at' => date('Y-m-d H:i:s', time()),
                // 'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Guitar Classic',
                'slug' => 'Yamaha',
                'price' => 400,
                // 'created_at' => date('Y-m-d H:i:s', time()),
                // 'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];
        foreach ($camps as $key => $camp) {
                Camp::create($camp);
        }
    }
}
