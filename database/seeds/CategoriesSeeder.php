<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('categories')->truncate();

        DB::table('categories')->insert([
        [
          'title' => 'Flooding',
          'description' => 'A flood is an overflow of water that submerges land that is usually dry. In the sense of "flowing water", the word may also be applied to the inflow of the tide.',
          'slug' => 'flooding'
        ],
        [
          'title' => 'Windstorm',
          'description' => 'European windstorms are the strongest extratropical cyclones which occur across the continent of Europe.',
          'slug' => 'windstorm'
        ],
        [
          'title' => 'Thunderstorm',
          'description' => 'A thunderstorm, also known as an electrical storm or a lightning storm, is a storm characterized by the presence of lightning and its acoustic effect on the Earth.',
          'slug' => 'thunderstorm'
        ],
        [
          'title' => 'Blizzard',
          'description' => 'A blizzard is a severe snowstorm characterized by strong sustained winds of at least 56 km/h (35 mph) and lasting for a prolonged period of time—typically three hours or more. A ground blizzard is a weather condition where snow is not falling but loose snow on the ground is lifted and blown by strong winds.',
          'slug' => 'blizzard'
        ],
        [
          'title' => 'Avalanche',
          'description' => 'An avalanche (also called a snowslide) is an event that occurs when a cohesive slab of snow lying upon a weaker layer of snow fractures and slides down.',
          'slug' => 'avalanche'
        ]
      ]);

        for ($post_id=0; $post_id <= 10; $post_id++) {
          // code...

          $category_id = rand(1,5);
          DB::table('posts')->where('id', $post_id)->update(['category_id' => $category_id]);
        }

      }
}
