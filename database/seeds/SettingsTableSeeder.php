<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
          'site_name' => "Laravel's Blog",
          'address' => 'Russia, Petersburg',
          'contact_number' => '8 900 7643 1231',
          'contact_email' => 'info@laravel_blog.com'
        ]);
    }
}
