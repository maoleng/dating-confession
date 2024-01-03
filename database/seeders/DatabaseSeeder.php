<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Confession;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->createConfession(150);


    }


    private function createConfession($count): void
    {
        $colors = [
            'violet',
            'green',
            'red',
            'orange',
            'yellow',
            'blue',
        ];
        $faker = Faker::create();
        $data = [];
        for ($i = 1; $i < $count; $i++) {
            $title = $faker->sentence(random_int(4, 7));
            $is_banner = random_int(0, 1);
            $content = $faker->text(4000);
            $data[] = [
                'title' => $title,
                'slug' => Str::slug($title),
                'banner' => $is_banner ? $faker->imageUrl(800, 800) : null,
                'color' => $is_banner ? null : $faker->randomElement($colors),
                'trailer_content' => random_int(0, 1) ? null : substr($content, 0, 1000),
                'content' => $content,
                'view' => random_int(0, 1000),
                'created_at' => $faker->dateTimeBetween('-2 years'),
            ];
        }
        Confession::query()->insert($data);
    }

}
