<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    public function run(): void
    {
        Classroom::insert([
            ['class_name' => 'CNTT1'],
            ['class_name' => 'CNTT2'],
            ['class_name' => 'CNTT3'],
        ]);
    }
}
