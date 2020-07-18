<?php

use App\Model\Answer;
use App\Model\Category;
use App\Model\Like;
use App\Model\Question;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(User::class , 10)->create();
        factory(Category::class ,5)->create();
        factory(Question::class ,10)->create();
        factory(Answer::class , 50)->create()->each(function ($answer){
            return $answer->likes()->save(factory(Like::class)->make());
        });
    }
}
