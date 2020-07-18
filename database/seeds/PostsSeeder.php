<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
// use App\Post;
use Carbon\Carbon;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // reset posts table
        DB::table('posts')->truncate();

        $posts = [];
        $faker = Factory::create();
      //  $carbonDate = Carbon::create(2017,5,5,5);

        // generating sample database
        for($i = 1; $i <= 10; $i++){

          $image = "Post_Image_".rand(1,5).".jpg";


          $min_date = '2015-12-24 13:03';
          $max_date = date("Y-m-d H:i:s");
          $min_epoch = strtotime($min_date);
          $max_epoch = strtotime($max_date);

          $rand_epoch = rand($min_epoch, $max_epoch);

          $randDate = date('Y-m-d H:i:s', $rand_epoch);

              //  $carbonDate = $carbonDate->addDays($i);

          $posts[] = [
            'author_id' => rand(1,7),
            'title' => $faker->sentence(rand(8,12)),
            'slug' => $faker->slug(),
            'excerpt' => $faker->text(rand(250, 300)),
            'body' => $faker->paragraphs(rand(10,15),true),
            'image' => rand(0,1) == 1 ? $image : NULL,
            'created_at' => $randDate,
            'updated_at' => $randDate,
            // 'published_at' => rand(1,0) == 0 ? NULL : $date->addDays($i + rand(4,10))
            'published_at' => $randDate
          ];
        }

        DB::table('posts')->insert($posts);
    }
}

?>
