<?php

use App\Post;
use App\Comments;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        factory('App\Post', 35)->create();
        /*factory('App\Post', 10)->create()->each(function($u) {
            $comments = factory('App\Comments', rand(0,10))->create();
            $tags     = factory('App\Tag', rand(0,3))->create();

            $u->comments()->save( $comments );
            $u->tags()->save( $tags );
        });*/

    }
}
