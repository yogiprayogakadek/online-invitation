<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $attendanceOptions = ['EXCITED TO ATTEND', 'Tidak Hadir'];

        $comments = [];

        // jumlah random antara 150 - 200
        $total = $faker->numberBetween(150, 200);

        for ($i = 0; $i < $total; $i++) {
            $attendance = $faker->randomElement($attendanceOptions);

            $comments[] = [
                'guest_name'   => $faker->name(),
                'attendance'   => $attendance,
                'no_of_guest'  => $faker->numberBetween(1, 2),
                'message'      => $faker->sentence($faker->numberBetween(1, 1)),
                'created_at'   => now(),
                'updated_at'   => now(),
            ];
        }

        DB::table('comments')->insert($comments);
    }
}
