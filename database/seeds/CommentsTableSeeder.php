<?php

use App\Comments;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comments::truncate();

        factory(Comments::class, 10)->create();
    }
}
