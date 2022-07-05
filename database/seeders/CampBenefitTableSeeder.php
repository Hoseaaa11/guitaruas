<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Maple Wood'
            ],
            [
                'camp_id' => 1,
                'name' => 'Hollow Body'
            ],
            [
                'camp_id' => 1,
                'name' => '22 Frets'
            ],
            [
                'camp_id' => 1,
                'name' => 'Four Color'
            ],
            [
                'camp_id' => 1,
                'name' => 'Sixth Strings'
            ],
            [
                'camp_id' => 1,
                'name' => 'Single Cutaway'
            ],    
            [
                'camp_id' => 2,
                'name' => 'Mahogany Wood'
            ],
            [
                'camp_id' => 2,
                'name' => 'Four Natural Color'
            ],
            [
                'camp_id' => 2,
                'name' => 'Silent String guitar'
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}

