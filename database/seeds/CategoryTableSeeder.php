<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $datas = [
        [
          'name' => 'Front End Web Development'
        ],
        [
          'name' => 'Back End Web Development'
        ],
        [
          'name' => 'Android Development'
        ],
        [
          'name' => 'iOS Development'
        ],
        [
          'name' => 'UI/UX'
        ]
      ];
      Category::insert($datas);
    }
}
