<?php

namespace Database\Seeders;

use App\Models\Confession;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfessionDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $confs = Confession::query()->inRandomOrder()->get();
        $user = User::query()->first();

        $histories = [];
        $interactions = [];
        foreach ($confs as $conf) {
            if ($faker->randomElement([0, 1, 1])) {
                $histories[] = [
                    'confession_id' => $conf->id,
                    'user_id' => $user->id,
                    'read_at' => $faker->dateTime,
                ];
                $interactions[] = [
                    'confession_id' => $conf->id,
                    'user_id' => $user->id,
                    'liked_at' => random_int(0, 1) ? $faker->dateTime : null,
                    'watch_later_at' => random_int(0, 1) ? $faker->dateTime : null,
                ];
            }
        }
        DB::table('confession_history')->insert($histories);
        DB::table('confession_interaction')->insert($interactions);
    }
}
