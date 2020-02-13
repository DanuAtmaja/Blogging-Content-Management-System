<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
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
            'tag' => 'programming'
          ],
          [
            'tag' => 'CRUD'
          ],
          [
            'tag' => 'Design'
          ],
          [
            'tag' => 'RESTFULL API'
          ]
        ];

        Tag::insert($datas);
    }
}
