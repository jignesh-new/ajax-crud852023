<?php

namespace Database\Seeders;

use App\Models\Ajax;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AjaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Ajax::create([
            'username' =>'testing',
            'email'=>'testing@example.com'
        ]);
    }
}
