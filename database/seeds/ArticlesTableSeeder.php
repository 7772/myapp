<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\user::all();

        $users->each(function ($user) {
            $user->articles()->save(
                factory(App\Article::class)->make()
            );
        });
    }

}
